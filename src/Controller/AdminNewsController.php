<?php

namespace App\Controller;

use App\Entity\News;
use App\Form\NewsType;
use App\Repository\CourseCategoryRepository;
use App\Repository\CourseLevelRepository;
use App\Repository\CourseRepository;
use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AdminNewsController
 * @package App\Controller
 * @Route("/admin/news")
 */
class AdminNewsController extends AbstractController
{
	/**
	 * @Route("/", name="admin_news")
	 */
	public function allNewsIndex()
	{
		return $this->render('admin_news/index.html.twig', [
			'controller_name' => 'AdminNewsController',
		]);
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @Route("/index", name="admin_news_index", methods={"GET"})
	 * @param NewsRepository $newsRepository
	 * @return Response
	 */
	public function index(NewsRepository $newsRepository): Response
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted(["ROLE_ADMIN", "ROLE_SUPER_ADMIN"]);

		$news = $newsRepository->findAll();

		// Visibilité du cours.
		$_GET ['visibility'] = $_GET ['visibility'] ?? '';
		$_GET ['id'] = $_GET ['id'] ?? '';

		if($_GET['visibility'] <= 1 && $_GET['id'] != null) {
			$newsId = $newsRepository->find($_GET['id']);
			// var_dump($_GET['visibility']);exit;

			if ($_GET['visibility'] == 1) {

				// var_dump($_GET['visibility']);exit;
				$newsId->setIsPublished(1);

			} elseif ($_GET['visibility'] == 0) {

				// var_dump($_GET['visibility']);exit;
				$newsId->setIsPublished(0);
			}
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($newsId);
			$entityManager->flush();

			// Message Flash
			$this->addFlash('news_visibility', $newsId->getIsPublished() == 0  ? 'Édition de visibilité caché réussi & accompli !' : 'Édition de visibilité affiché réussi & accompli !');
		}

		return $this->render('admin/news/news.index.html.twig', [
			'news' => $newsRepository->findAll(),
		]);
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @Route("/new", name="admin_news_new", methods={"GET","POST"})
	 */
	public function new(Request $request): Response
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted(["ROLE_ADMIN", "ROLE_SUPER_ADMIN"]);

		$news = new News();
		$form = $this->createForm(NewsType::class, $news);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($news);
			$entityManager->flush();

			return $this->redirectToRoute('news_index');
		}

		return $this->render('public/news/new.html.twig', [
			'news' => $news,
			'form' => $form->createView(),
		]);
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @Route("/{id}", name="admin_news_show", methods={"GET"})
	 */
	public function show(News $news): Response
	{
		return $this->render('public/news/course.show.html.twig', [
			'news' => $news,
		]);
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @Route("/{id}/edit", name="admin_news_edit", methods={"GET","POST"})
	 */
	public function edit(Request $request, News $news): Response
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted(["ROLE_ADMIN", "ROLE_SUPER_ADMIN"]);

		$form = $this->createForm(NewsType::class, $news);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$this->getDoctrine()->getManager()->flush();

			return $this->redirectToRoute('news_index');
		}

		return $this->render('public/news/course.user.edit.html.twig', [
			'news' => $news,
			'form' => $form->createView(),
		]);
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @Route("/{id}", name="admin_news_delete", methods={"DELETE"})
	 */
	public function delete(Request $request, News $news): Response
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted(["ROLE_ADMIN", "ROLE_SUPER_ADMIN"]);

		if ($this->isCsrfTokenValid('delete'.$news->getId(), $request->request->get('_token'))) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($news);
			$entityManager->flush();
		}

		return $this->redirectToRoute('news_index');
	}
}
