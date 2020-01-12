<?php

namespace App\Controller;

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\User;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Repository\UserRepository;
use App\Service\ContactService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;


/**
 * @Route("/admin/comment")
 */
class AdminCommentController extends AbstractController
{
	/**
	 * @Route("/", name="admin_comment_index", methods={"GET"})
	 * @param CommentRepository $commentRepository
	 * @param UserRepository $userRepository
	 * @param Security $security
	 * @param ContactService $contactService
	 * @return Response
	 */
	public function index(CommentRepository $commentRepository, UserRepository $userRepository, Security $security, ContactService $contactService): Response
	{
		$this->denyAccessUnlessGranted(['ROLE_ADMIN', 'ROLE_SUPER_ADMIN']);

		$comment = $commentRepository->findAll();
		$user = $userRepository->findAll();

		// Pour accédé au role actuel il faut employer le module securité (dans use et cette fonction),
		// pour pouvoir vérifier le rang.
		$userRole = $security->getUser()->getRoles();
		// ... do whatever you want with $user

		// Visibilité du cours.
		$_GET ['disabled'] = $_GET ['disabled'] ?? '';
		$_GET ['id'] = $_GET ['id'] ?? '';

		if ($_GET['disabled'] <= 1 && $_GET['id'] != null) {
			$commentId = $commentRepository->find($_GET['id']);
			// var_dump($_GET['visibility']);exit;

			if ($userRole == ['ROLE_ADMIN']) {

				if ($commentId->getUser()->getRoles() == ['ROLE_ADMIN'] OR $commentId->getUser()->getRoles() == ['ROLE_SUPER_ADMIN']) {

					// Message Flash
					$this->addFlash('comment_warning', "Un administrateur ne peut pas désactivé un autre administrateur ou le super‑administrateur.");

				} else {

					if ($_GET['disabled'] == 1) {

						// var_dump($_GET['visibility']);exit;
						$commentId->setIsDisabled(1); // Vrai

						$contactService->advertiseByMail();

					} elseif ($_GET['disabled'] == 0) {

						// var_dump($_GET['visibility']);exit;
						$commentId->setIsDisabled(0); // Faux
					}
					$entityManager = $this->getDoctrine()->getManager();
					$entityManager->persist($commentId);
					$entityManager->flush();

					// Message Flash
					$this->addFlash('comment_disabled', $commentId->getId() == 0 ? 'Édition activation du commentaire compte réussi & accompli !' : 'Édition désactivation de compte réussi & accompli !');
				}
			} elseif ($userRole == ['ROLE_SUPER_ADMIN']) {

				if ($_GET['disabled'] == 1) {

					// var_dump($_GET['visibility']);exit;
					$commentId->setIsDisabled(1);

				} elseif ($_GET['disabled'] == 0) {

					// var_dump($_GET['visibility']);exit;
					$commentId->setIsDisabled(0);
				}
				$entityManager = $this->getDoctrine()->getManager();
				$entityManager->persist($commentId);
				$entityManager->flush();

				// Message Flash
				$this->addFlash('comment_disabled', $commentId->getId() == 0 ? 'Édition activation de commentaire réussi & accompli !' : 'Édition désactivation de commentaire réussi & accompli !');
			}
		}

		return $this->render('admin/comment/comment.index.html.twig', [
			'comments' => $commentRepository->findBy(Array(), array('dateAddedAt'=>'DESC')),
			'users' => $userRepository->findAll(),
		]);
	}

//	/**
//	 * @Route("/new", name="admin_comment_new", methods={"GET","POST"})
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
	 * @Route("/{id}", name="admin_comment_show", methods={"GET"})
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
	 * @Route("/{id}/edit", name="admin_comment_edit", methods={"GET","POST"})
	 * @param Request $request
	 * @param Comment $comment
	 * @return Response
	 */
	public function edit(Request $request, Comment $comment): Response
	{
		$form = $this->createForm(CommentType::class, $comment);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$this->getDoctrine()->getManager()->flush();

			return $this->redirectToRoute('comment_index');
		}

		return $this->render('admin/comment/course.user.edit.html.twig', [
			'comment' => $comment,
			'form' => $form->createView(),
		]);
	}

	/**
	 * @Route("/{id}", name="admin_comment_delete", methods={"DELETE"})
	 * @param Request $request
	 * @param Comment $comment
	 * @return Response
	 */
	public function delete(Request $request, Comment $comment): Response
	{
		if ($this->isCsrfTokenValid('delete' . $comment->getId(), $request->request->get('_token'))) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($comment);
			$entityManager->flush();
		}

		return $this->redirectToRoute('comment_index');
	}
}

