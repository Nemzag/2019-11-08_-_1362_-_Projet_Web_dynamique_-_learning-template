<?php

namespace App\Controller;

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
    public function courses()
    {
        return $this->render('course/courses.html.twig');
    }
}
