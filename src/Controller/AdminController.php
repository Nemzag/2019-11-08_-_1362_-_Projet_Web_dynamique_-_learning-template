<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2019-11-27
 * Time: 22h51
 * Updated:
*/


namespace App\Controller;

use App\Repository\CourseCategoryRepository;
use App\Repository\CourseLevelRepository;
use App\Repository\CourseRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
	/**
	 * @Route("/", name="admin")
	 */
	public function adminHome() {

		return $this->render('admin/index.html.twig', [
			/*
			'courses' => $courses,
			'categories' => $categories,
			'levels' => $levels
			*/
		]);
	}

	public function index(PaginatorInterface $paginator, Request $request)
	{
		$post = $this->getDoctrine()
			->getRepository(CourseController::class)
			->findAll();
		$pagination = $paginator->paginate(
			$post,
			$request->query->getInt('page', 1), 5);
		return $this->render('post/index.html.twig', [
			'posts' => $pagination]);
	}

	//────────────────────────────────────────────────────────────────────────

	// Affichage de la liste complete de’s cours’s.
	/**
	 * @Route("/all-Course", name="all_course")
	 * @param CourseCategoryRepository $CourseCategoryRepository
	 * @param CourseRepository $CourseRepository
	 * @param CourseLevelRepository $CourseLevelRepository
	 * @return Response
	 */
	// public function courses() // Version du prof au départ.
	public function allCourse(CourseCategoryRepository $CourseCategoryRepository, CourseRepository $CourseRepository, CourseLevelRepository $CourseLevelRepository)
	{
		$courses = $CourseRepository->findAll();
		$categories = $CourseCategoryRepository->findAll();
		$levels = $CourseLevelRepository->findAll();

		return $this->render('admin/course/all-courses.index.html.twig', [
			'courses' => $courses,
			'categories' => $categories,
			'levels' => $levels
		]);
	}
}