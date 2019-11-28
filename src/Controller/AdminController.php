<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2019-11-27
 * Time: 22h51
 * Updated:
*/


namespace App\Controller;


use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
	/**
	 * @Route("/test", name="test")
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
}