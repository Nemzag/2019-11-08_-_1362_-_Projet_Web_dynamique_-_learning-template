<?php

namespace App\Controller;

use App\Entity\News;
use App\Form\NewsType;
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
	 */
	public function index(NewsRepository $newsRepository): Response
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted(["ROLE_ADMIN", "ROLE_SUPER_ADMIN"]);

		return $this->render('public/account/admin.login.html.twig', [
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