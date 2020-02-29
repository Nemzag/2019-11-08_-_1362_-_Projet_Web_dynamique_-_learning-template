<?php

namespace App\Controller;

use App\Entity\News;

use App\Form\NewsType;

use App\Repository\NewsRepository;
use App\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;


/**
 * Class News
 * @Route("/nouvelle")
 */
class NewsController extends AbstractController
{
	/**
	 * @var Security
	 */
	private $security;

	public function __construct(Security $security)
	{
		$this->security = $security;
	}

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

	//=======================================================================================

	/**
	 * @Route("/subscribe", name="news_subscribe")
	 * @param UserRepository $userRepository
	 * @return Response
	 */
	public function subscribe(UserRepository $userRepository): Response
	{
		if ($this->security->isGranted('IS_AUTHENTICATED_FULLY')) {

			$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

			$ActualUserId = $this->get('security.token_storage')->getToken()->getUser()->getId();

			$userId = $userRepository->find($ActualUserId);

			$userId->setIsNewsLetters(1);

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($userId);
			$entityManager->flush();

			// Message Flash
			$this->addFlash('public_newsletter_success', 'Vous êtes désormais inscrit, vous recevrez toute nos prochaines lettres d’actualité. Nous espérons que elle vous plairont.');

			return $this->redirectToRoute('home');

		} else {

			// Message Flash
			$this->addFlash('public_newsletter_failure', 'Vous devez être logué pour vous inscrire à la lettre de actualité.');

			return $this->redirectToRoute('home');
		}
	}

	/**
	 * @Route("/unsubscribe", name="news_unsubscribe")
	 * @param UserRepository $userRepository
	 * @return Response
	 */
	public function unsubscribe(UserRepository $userRepository): Response
	{
		if ($this->security->isGranted('IS_AUTHENTICATED_FULLY')) {

			$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

			$ActualUserId = $this->get('security.token_storage')->getToken()->getUser()->getId();

			$userId = $userRepository->find($ActualUserId);

			$userId->setIsNewsLetters(0);

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($userId);
			$entityManager->flush();

			// Message Flash
			$this->addFlash('public_newsletter_success', 'Vous êtes désormais désinscrit, vous ne recevrez plush nos prochaines lettres d’actualité. Au revoir.');

			return $this->redirectToRoute('home');

		} else {

			// Message Flash
			$this->addFlash('public_newsletter_failure', 'Vous devez être logué pour vous désinscrire des lettres de actualités.');

			return $this->redirectToRoute('home');
		}
	}

	//=======================================================================================

	/**
	 * @Route("/subscribe_in_newsletters_page", name="news_subscribe_in_newsletters_page")
	 * @param UserRepository $userRepository
	 * @return Response
	 */
	public function subscribeInNewsLettersPage (UserRepository $userRepository): Response
	{
		if ($this->security->isGranted('IS_AUTHENTICATED_FULLY')) {

			$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

			$ActualUserId = $this->get('security.token_storage')->getToken()->getUser()->getId();

			$userId = $userRepository->find($ActualUserId);

			$userId->setIsNewsLetters(1);

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($userId);
			$entityManager->flush();

			// Message Flash
			$this->addFlash('public_newsletter_success', 'Vous êtes désormais inscrit, vous recevrez toute nos prochaines lettres d’actualité. Nous espérons que elle vous plairont.');

			return $this->redirectToRoute('news');

		} else {

			// Message Flash
			$this->addFlash('public_newsletter_failure', 'Vous devez être logué pour vous inscrire à la lettre de actualité.');

			return $this->redirectToRoute('news');
		}
	}

	/**
	 * @Route("/unsubscribe_in_newsletters_page", name="news_unsubscribe_in_newsletters_page")
	 * @param UserRepository $userRepository
	 * @return Response
	 */
	public function unsubscribeInNewsLetterPage(UserRepository $userRepository): Response
	{
		if ($this->security->isGranted('IS_AUTHENTICATED_FULLY')) {

			$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

			$ActualUserId = $this->get('security.token_storage')->getToken()->getUser()->getId();

			$userId = $userRepository->find($ActualUserId);

			$userId->setIsNewsLetters(0);

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($userId);
			$entityManager->flush();

			// Message Flash
			$this->addFlash('public_newsletter_unsubscribe_success', 'Vous êtes désormais désinscrit, vous ne recevrez plush nos prochaines lettres d’actualité. Au revoir.');

			return $this->redirectToRoute('news');

		} else {

			// Message Flash
			$this->addFlash('public_newsletter_unsubscribe_failure', 'Vous devez être logué pour vous désinscrire des lettres de actualités.');

			return $this->redirectToRoute('news');
		}
	}

	//=======================================================================================

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