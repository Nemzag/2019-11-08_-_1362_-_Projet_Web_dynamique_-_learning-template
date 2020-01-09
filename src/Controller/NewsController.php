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
 * Class News
 * @Route("/news")
 */
class NewsController extends AbstractController
{
	/**
	 * @Route("/", name="news")
	 */
	public function home()
	{
		$news = $this
			->getDoctrine()
			->getRepository(News::class)
			->findAll();

		return $this->render('public/news/news.index.html.twig', [
			"news" => $news
		]);
	}

	/**
	 * @Route("/{id}", name="news_show", methods={"GET"})
	 * @param News $news
	 * @return Response
	 */
	public function show(News $news): Response
	{
		return $this->render('public/news/news.show.html.twig', [
			'news' => $news,
		]);
	}
}