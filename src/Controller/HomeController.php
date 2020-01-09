<?php

namespace App\Controller;

use App\Entity\Course;
use App\Entity\News;
use PhpParser\Node\Expr\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
	    $news = $this
		    ->getDoctrine()
		    ->getRepository(News::class )
		    ->findBy(Array(), array('createdAt'=>'DESC'), 6);

	    $courses = $this
		    ->getDoctrine()
		    ->getRepository(Course::class )
		    ->findBy(Array(), array('createdAt'=>'DESC'), 3);

        return $this->render('public/home/index.html.twig', [
	        "news" => $news,
	        "courses" => $courses,
        ]);
    }
}
