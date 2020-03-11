<?php

namespace App\Controller;

use App\Entity\Course;
use App\Entity\News;
use App\Repository\UserRepository;
use PhpParser\Node\Expr\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class HomeController
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(Security $security, UserRepository $userRepository)
    {
	    $news = $this
		    ->getDoctrine()
		    ->getRepository(News::class )
		    ->findBy(Array('isPublished'=> 1), array('createdAt'=>'DESC'), 6);
	        // 1. Paramètre, 2. Ordre, 3. Limite.

	    $courses = $this
		    ->getDoctrine()
		    ->getRepository(Course::class )
		    ->findBy(Array('isPublished'=> 1), array('createdAt'=>'DESC'), 3);



	    $AnonymousUser = "";

	    if($security->getUser() != null) {

		    $userId = $security->getUser()->getId();

		    if(isset($userId)) {
			    $AnonymousUser = $userRepository->findOneBy(
				    array(
					    'id' => $security->getUser()->getId()
				    ));
		    }
	    }

        return $this->render('public/home/index.html.twig', [
	        "news" => $news,
	        "courses" => $courses,
	        'user' => $AnonymousUser,
        ]);
    }
}
