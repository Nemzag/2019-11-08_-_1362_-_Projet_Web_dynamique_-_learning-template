<?php

namespace App\Controller;

use App\Entity\PasswordChange;
use App\Entity\User;

use App\Form\PasswordChangeType;
use App\Form\UserEditType;

use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
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

	//=======================================================================================

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
			// Désactivation de isValid(), due à Vich car ce bundle caché empêche le fonctionnemênt norm‑al.

			if (!empty($user->getImage())) {

				$user->setImage($user->getImage());

			} elseif (empty($user->getImageFile())) {

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
			$this->addFlash('public_user_success', 'Modification de profil réussi & accompli !');

			return $this->redirectToRoute('home');

		} elseif ($form->getErrors()->count() > 0) {

			// Message Flash
			$this->addFlash('admin_user_danger', 'Échec de la modification du profil !');
		}

		return $this->render('public/user/user.edit.html.twig', [
			'user' => $user,
			'userForm' => $form->createView(),
			'errors' => $form->getErrors(true, true),
		]);
	}

	//=======================================================================================

	/**
	 * @Route("/password_update/{id}", name="password_update")
	 * @param Request $request
	 * @param EntityManagerInterface $entityManager
	 * @param UserPasswordEncoderInterface $passwordEncoder
	 * @param User $user
	 * @return Response
	 * @throws Exception
	 */
	public
	function changePassword(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordEncoder, User $user)
	{
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

		$passwordChange = new PasswordChange();

		$form = $this->createForm(PasswordChangeType::class, $passwordChange);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			// https://symfony.com/doc/current/components/security/authentication.html
			// https://symfony.com/doc/4.0/security/custom_password_authenticator.html
			if ($passwordEncoder->isPasswordValid($user, $passwordChange->getOldPassword())) {

				$hash = $passwordEncoder->encodePassword(
					$user,
					$passwordChange->getNewPassword()
				);
				// encode the plain password
				$user->setPassword($hash);

				$now = new \DateTime('now');
				$user->setUpdatedAt($now);

				$entityManager->persist($user);
				$entityManager->flush();

				// Message Flash
				$this->addFlash('password_change_success', 'Modification de mot de passe réussi !');

				return $this->redirectToRoute('home');

			}

		} elseif($form->isSubmitted()) {

			// Message Flash
			$this->addFlash('password_change_danger', 'Mot de passe non identique ou incorrect !');
		}

		return $this->render('public/account/account_password.html.twig', [
			'formPasswordChange' => $form->createView(),
			'passwordChange' => $passwordChange,
		]);
	}
}
