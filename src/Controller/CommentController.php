<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Course;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Repository\CourseLevelRepository;
use App\Repository\CourseRepository;
use DateTime;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * @Route("/comment")
 */
class CommentController extends AbstractController
{
    /**
     * @Route("/", name="comment_index", methods={"GET"})
     */
    public function index(CommentRepository $commentRepository): Response
    {
        return $this->render('comment/admin.login.html.twig', [
            'comments' => $commentRepository->findAll(),
        ]);
    }

//	/**
//	 * @Route("/new", name="comment_new", methods={"GET","POST"})
//	 * @param Request $request
//	 * @return Response
//	 */
/*
public function new(Request $request): Response
{
	$comment = new Comment();
	$form = $this->createForm(CommentType::class, $comment);
	$form->handleRequest($request);

	if ($form->isSubmitted() && $form->isValid()) {
		$entityManager = $this->getDoctrine()->getManager();
		$entityManager->persist($comment);
		$entityManager->flush();

		return $this->redirectToRoute('comment_index');
	}

	return $this->render('comment/new.html.twig', [
		'comment' => $comment,
		'form' => $form->createView(),
	]);
}
*/

	/**
	 * @Route("/{id}", name="comment_show", methods={"GET"})
	 * @param Comment $comment
	 * @return Response
	 */
    public function show(Comment $comment): Response
    {
        return $this->render('comment/course.show.html.twig', [
            'comment' => $comment,
        ]);
    }

	/**
	 * @Route("/{id}/edit", name="comment_edit", methods={"GET","POST"})
	 * @param Request $request
	 * @param Comment $comment
	 * @param CourseRepository $courseRepository
	 * @param Security $security
	 * @return Response
	 * @throws Exception
	 */
    public function edit($id, Request $request, Comment $comment, CourseRepository $courseRepository, Security $security): Response
    {
	    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

	        // Avto‑daθə updaθə…
	        
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('course_details', array('id' => $comment->getCourse()->getId()));
        }

        return $this->render('public/comment/comment.edit.html.twig', [
            'comment' => $comment,
            'commentForm' => $form->createView(),
	        'errors' => $form->getErrors(true, true),
        ]);
    }

	/**
	 * @Route("/{id}", name="comment_delete", methods={"DELETE"})
	 * @param Request $request
	 * @param Comment $comment
	 * @return Response
	 */
    public function delete(Request $request, Comment $comment): Response
    {
    	$courseId = $comment->getCourse()->getId() ;

        if ($this->isCsrfTokenValid('delete'.$comment->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($comment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('course_details', array('id' => $courseId));
    }
}
