<?php

namespace App\Controller;

use App\Entity\User;

use App\Form\UserEditType;

use DateTime;
use Exception;

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
	 * @Route("/{id}", name="public_user_show", methods={"GET"})
	 * @param User $user
	 * @return Response
	 */
	public function show(User $user): Response
	{
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

		/*
		// Pour accédé au role actuel il faut employer le module sécurité (dans use et cette fonction),
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

	/**
	 * @Route("/{id}/edit", name="public_user_edit", methods={"GET","POST"})
	 * @param Request $request
	 * @param User $user
	 * @param Security $security
	 * @return Response
	 * @throws Exception
	 */
	public function edit(Request $request, User $user, Security $security): Response
	{
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

		// 2020‑01‑03 ‒ 22H49 : gestion de image.
		$imageFile = $user->getImage();

		$form = $this->createForm(UserEditType::class, $user);
		$form->handleRequest($request);

		// Si image existe, la garder, sinon image par image défaut.
		if ($form->isSubmitted() && $form->isValid()) {

			if(!empty($user->getImage())) {

				$user->setImage($user->getImage());

			} elseif(empty($user->getImageFile())) {

				$user->setImage('default.jpg');
			}

			// Avto‑daθə updaθə…
			$now = new DateTime('now');

			$user->setUpdatedAt($now);
			$user->setLastLogAt($now);

			// Pour accédé au role actuel il faut employer le module sécurité (dans use et cette fonction),
			// pour pouvoir vérifier le rang.
			$user->setRole($security->getUser()->getRoles());

			$user->setPassword($security->getUser()->getPassword());

			$this->getDoctrine()->getManager()->flush();

			// Message Flash
			$this->addFlash('public_user_success', 'Modification réussi & accompli !');

			return $this->redirectToRoute('user_index');
		}
		// Message Flash
		$this->addFlash('public_user_danger', 'Échec de la modification !');

		return $this->render('public/user/user.edit.html.twig', [
			'user' => $user,
			'placeHolder' => $imageFile,
			'userForm' => $form->createView(),
			'errors' => $form->getErrors(true, true),
		]);
	}
}
