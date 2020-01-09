<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class UserController
 * @package App\Controller
 * @Route("/user")
 */
class UserController extends AbstractController
{
	/**
	 * @Route("/{id}", name="user_show", methods={"GET"})
	 * @param User $user
	 * @param UserRepository $userRepository
	 * @param Security $security
	 * @return Response
	 */
	public function show(User $user, UserRepository $userRepository, Security $security): Response
	{
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

		/*
		// Pour accédé au role actuel il faut employer le module securité (dans use et cette fonction),
		// pour pouvoir vérifier le rang.
		$userId = $security->getUser()->getRoles();
		// ... do whatever you want with $user

		$user = $userRepository->find($userId);
		*/
		// return $this->render('user/index.html.twig', ['users' => $userRepository->findAll()]);
		return $this->render('public/user/user.show.html.twig', [
			'user' => $user,
		]);
	}
}
