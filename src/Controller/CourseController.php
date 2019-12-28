<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 2019-11-29
 * Time: 09h37
 * Updated:
*/

namespace App\Controller;

use App\Entity\Course;
use App\Entity\CourseCategory;
use App\Entity\CourseLevel;
use App\Form\CourseType;

use App\Repository\CourseCategoryRepository;
use App\Repository\CourseLevelRepository;
use App\Repository\CourseRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Ancienne version.
/**
 * Class CourseController
 */
class CourseController extends AbstractController
{
	/**
	 * @Route("/courses", name="courses")
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
	 * @Route("/courses/{id}", name="course_details")
	 * @param $id
	 * @return Response
	 */
	public function coursesDetails($id) {

		$course = $this
			->getDoctrine()
			->getRepository(Course::class )
			->find($id);

		$category = $this
			->getDoctrine()
			->getRepository(CourseCategory::class )
			->find($id);

		$level = $this
			->getDoctrine()
			->getRepository(CourseLevel::class )
			->find($id);

		return $this->render('public/course/details.html.twig',[
			/* Attention pash de double []
			['course' => $course],
			['category' => $category]);
			*/
			'course' => $course,
			'category' => $category,
			'level' => $level
		]);
	}
}
