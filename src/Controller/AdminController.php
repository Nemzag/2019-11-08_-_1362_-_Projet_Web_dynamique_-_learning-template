<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2019-11-27
 * Time: 22h51
 * Updated:
*/


namespace App\Controller;

use App\Entity\Course;

use App\Form\CourseType;

use App\Repository\CourseCategoryRepository;
use App\Repository\CourseLevelRepository;
use App\Repository\CourseRepository;

use Knp\Component\Pager\PaginatorInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{

	/**
	 * @Route("/", name="admin")
	 */
	public function adminHome() {

		$this->denyAccessUnlessGranted(['ROLE_ADMIN', 'ROLE_SUPER_ADMIN']);

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
		return $this->render('post/admin.login.html.twig', [
			'posts' => $pagination]);
	}
}