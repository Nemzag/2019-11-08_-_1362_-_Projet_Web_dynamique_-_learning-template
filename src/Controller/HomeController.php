<?php

namespace App\Controller;

use App\Entity\News;
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
		    ->findAll();

        return $this->render('public/home/index.html.twig', [
	        "news" => $news
        ]);
    }
}
