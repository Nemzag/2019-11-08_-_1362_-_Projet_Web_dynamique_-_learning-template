<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 2019-11-29
 * Time: 09h37
 * Updated:
*/

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Course;
use App\Entity\CourseCategory;
use App\Entity\CourseLevel;
use App\Entity\User;
use App\Form\CommentType;
use App\Form\CourseType;

use App\Repository\CourseCategoryRepository;
use App\Repository\CourseLevelRepository;
use App\Repository\CourseRepository;

use DateTime;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

// Ancienne version.

/**
 * Class CourseController
 * @Route("/cours")
 */
class CourseController extends AbstractController
{
	/**
	 * @Route("/", name="courses")
	 * @param CourseCategoryRepository $CourseCategoryRepository
	 * @param CourseRepository $CourseRepository
	 * @param CourseLevelRepository $CourseLevelRepository
	 * @return Response
	 */
	// public function courses() // Version du prof au départ.
	public function courses(CourseCategoryRepository $CourseCategoryRepository, CourseRepository $CourseRepository, CourseLevelRepository $CourseLevelRepository)
	{
		$courses = $CourseRepository->findAll();
		$categories = $CourseCategoryRepository->findAll();
		$levels = $CourseLevelRepository->findAll();

		return $this->render('public/course/courses.html.twig', [
			'courses' => $courses,
			'categories' => $categories,
			'levels' => $levels
		]);

		/*
		$courses = $repoCourse->findBy(
			['isPublished' => true],
			['name' => 'ASC']
		 );
		 $categories = $repoCategory->findBy(
			[],
			['name' => 'ASC']
		 );
		*/
	}

	// Créé le controleur Details.

	/**
	 * @Route("/{id}", name="course_details", methods={"GET","POST"})
	 * @param $id
	 * @param Request $request
	 * @param Security $security
	 * @return Response
	 * @throws Exception
	 */
	public function coursesDetails($id, Request $request, Security $security): Response
	{

		// Obtention des informations de la table / entité dans la data‑base.
		$course = $this
			->getDoctrine()
			->getRepository(Course::class)
			->find($id);

		// Obtention des informations de la table / entité dans la data‑base.
		$category = $this
			->getDoctrine()
			->getRepository(CourseCategory::class)
			->find($id);

		// Obtention des informations de la table / entité dans la data‑base.
		$level = $this
			->getDoctrine()
			->getRepository(CourseLevel::class)
			->find($id);

		// Obtention des informations de la table / entité dans la data‑base.
		$comments = $this
			->getDoctrine()
			->getRepository(Comment::class)
			->findBy(
				['course' => $course->getId()]
			);
		// ->findBy(['product' => $product->getId()]) // Quoi ???

		// Obtention des informations de la table / entité dans la data‑base.
		// Inutil.
		/*
		$user = $this
			->getDoctrine()
			->getRepository(User::class)
			->find($id);
		*/

		//══════════════════════════════════════════════════════════════════════════════════════════════

		// Cette fonctionnalité a été faite avec la aide de un ami (Q…).
		// Qui me l'a suggéré car je n'arrivais pas à cacher le textArea quoi que je fasse en Twig, il m'a conseillé de passé par le controller. .

		// $user = $this->getUser();
		// dump($user);
		$noComment = false;


		foreach ($comments as $c) {
			// dump($c);
			// dump($c->getUser());
			// dump($c->getUser()->getId());
			// dump($user->getId());
			// dump($_SESSION);
			// dump($c->getUser()->getId());
			// dump($user->getId());

			// Rajout de cette ligne pour éviter un message de erreur en cas de non‑logué.
			if($this->getUser() != null) {

				if ($c->getUser()->getId() === $this->getUser()->getId()) {

					$noComment = true;
					break;
				}
			}
		}

		//══════════════════════════════════════════════════════════════════════════════════════════════

		$newComment = new Comment();

		$form = $this->createForm(CommentType::class, $newComment);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			// Avto‑daθə updaθə…
			$now = new DateTime('now');

			$newComment->setUser($security->getUser());
			// $newComment->setUser($security->getUser()->getId());

			$newComment->setCourse($course);

			$newComment->setDateAddedAt($now);

			$newComment->setIsDisabled(false);

			// dump($form);

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($newComment);
			$entityManager->flush();

			return $this->redirectToRoute('course_details', ['id' => $course->getId()]);
		}
		// dump($comments);

		// Comparator function used for comparator
		// scores of two object/students
		function comparator($object1, $object2) {
			return $object1->score > $object2->score;
		}

		return $this->render('public/course/details.html.twig', [
			// Attention pash de double []
			// ['course' => $course],
			// ['category' => $category]);
			'course' => $course,
			'category' => $category,
			'level' => $level,
			// 'user' => $user,
			'comments' => $comments,
			'commentForm' => $form->createView(),
			'noComment' => $noComment,
			'errors' => $form->getErrors(true, true),
		]);
	}
}

// /**
// * @Route("/{id}", name="course_details")
// * @param $id
// * @return Response
// */
/*
public function coursesDetails($id) {

// Obtention des informations de la table / entité dans la data‑base.
$course = $this
->getDoctrine()
->getRepository(Course::class )
->find($id);

// Obtention des informations de la table / entité dans la data‑base.
$category = $this
->getDoctrine()
->getRepository(CourseCategory::class )
->find($id);

// Obtention des informations de la table / entité dans la data‑base.
$level = $this
->getDoctrine()
->getRepository(CourseLevel::class )
->find($id);

// Obtention des informations de la table / entité dans la data‑base.
$comment = $this
->getDoctrine()
->getRepository(Comment::class )
->findBy(['course' => $course->getId()]);
// ->findBy(['product' => $product->getId()]) // Quoi ???

// Obtention des informations de la table / entité dans la data‑base.
$user = $this
->getDoctrine()
->getRepository(User::class )
->findAll();

return $this->render('public/course/details.html.twig',[
// Attention pash de double []
// ['course' => $course],
// ['category' => $category]);
'course' => $course,
'category' => $category,
'level' => $level,
'comment' => $comment,
'user' => $user
]);
}
*/