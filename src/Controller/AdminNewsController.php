<?php

namespace App\Controller;

use App\Entity\News;
use App\Form\NewsType;
use App\Repository\CourseCategoryRepository;
use App\Repository\CourseLevelRepository;
use App\Repository\CourseRepository;
use App\Repository\NewsRepository;
use App\Service\ContactService;
use DateTime;
use Exception;
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

		if ($_GET['visibility'] <= 1 && $_GET['id'] != null) {
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
			$this->addFlash('news_visibility', $newsId->getIsPublished() == 0 ? 'Édition de visibilité caché réussi & accompli !' : 'Édition de visibilité affiché réussi & accompli !');

			return $this->redirectToRoute('admin_news_index');
		}

		return $this->render('admin/news/news.index.html.twig', [
			// 'news' => $newsRepository->findAll(),
			'news' => $newsRepository->findBy(Array(), array('createdAt' => 'DESC')),
		]);
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @Route("/new", name="admin_news_new", methods={"GET","POST"})
	 * @param Request $request
	 * @param ContactService $contactService
	 * @return Response
	 * @throws Exception
	 */
	public function new(Request $request, ContactService $contactService): Response
	// Ajout de ContactService $contactService pour la reception de email lors de la création de une nouvelle newsletters.
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted(["ROLE_ADMIN", "ROLE_SUPER_ADMIN"]);

		$news = new News();
		$form = $this->createForm(NewsType::class, $news);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$now = new DateTime('now');

			$news->setCreatedAt($now);

			if (empty($news->getImageFile())) $news->setImage('default.jpg');

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($news);
			$entityManager->flush();

			$contactService->newsLettersByMail();

			// Message Flash
			$this->addFlash('news_success', 'Édition réussi & accompli !');

			return $this->redirectToRoute('admin_news_index');
		}

		return $this->render('admin/news/news.new.html.twig', [
			'news' => $news,
			'formNews' => $form->createView(),
		]);
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @Route("/{id}", name="admin_news_show", methods={"GET"})
	 * @param News $news
	 * @return Response
	 */
	public function show(News $news): Response
	{
		return $this->render('admin/news/news.show.html.twig', [
			'news' => $news,
		]);
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @Route("/{id}/edit", name="admin_news_edit", methods={"GET","POST"})
	 * @param Request $request
	 * @param News $news
	 * @return Response
	 */
	public function edit(Request $request, News $news): Response
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted(["ROLE_ADMIN", "ROLE_SUPER_ADMIN"]);

		$imageFile = $news->getImage();

		$form = $this->createForm(NewsType::class, $news);
		$form->handleRequest($request);

		// Si image existe, la garder, sinon image par image défaut.
		if ($form->isSubmitted() && $form->isValid()) {

			if (!empty($news->getImage())) {

				$news->setImage($news->getImage());

			} elseif (empty($news->getImageFile())) {

				$news->setImage('default.jpg');
			}

			$this->getDoctrine()->getManager()->flush();

			// Message Flash
			$this->addFlash('news_success', 'Édition réussi & accompli !');

			return $this->redirectToRoute('admin_news_index');
		}

		return $this->render('admin/news/news.edit.html.twig', [
			'news' => $news,
			'formNews' => $form->createView(),
		]);
	}

	//══════════════════════════════════════════════════════════════════════════════════════════════

	/**
	 * @Route("/{id}", name="admin_news_delete", methods={"DELETE"})
	 * @param Request $request
	 * @param News $news
	 * @return Response
	 */
	public function delete(Request $request, News $news): Response
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted(["ROLE_ADMIN", "ROLE_SUPER_ADMIN"]);

		if ($this->isCsrfTokenValid('delete' . $news->getId(), $request->request->get('_token'))) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($news);
			$entityManager->flush();

			// Message Flash
			$this->addFlash('news_success', 'Suppression réussi & accompli !');
		}

		return $this->redirectToRoute('admin_news_index');
	}
}
