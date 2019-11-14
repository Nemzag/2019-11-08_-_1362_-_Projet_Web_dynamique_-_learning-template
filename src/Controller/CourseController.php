<?php

namespace App\Controller;

use App\Entity\Course;
use App\Entity\CourseCategory;
use App\Entity\CourseLevel;
use App\Repository\CourseCategoryRepository;
use App\Repository\CourseLevelRepository;
use App\Repository\CourseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CourseController
 */
class CourseController extends AbstractController
{
    /**
     * @Route("/courses", name="courses")
     */
    // public function courses() // Version du prof au départ.
    public function courses(CourseCategoryRepository $CourseCategoryRepository, CourseRepository $CourseRepository, CourseLevelRepository $CourseLevelRepository)
    {
    	$courses = $CourseRepository->findAll();
	    $categories = $CourseCategoryRepository->findAll();
	    $levels = $CourseLevelRepository->findAll();

        return $this->render('course/courses.html.twig', [
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

		return $this->render('course/details.html.twig',[
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
