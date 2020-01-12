<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 12/11/2019
 * Time: 14:47
 * Updated:
*/

namespace App\Controller;

use App\Entity\PasswordUpdate;

use App\Form\PasswordUpdateType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class AccountController extends AbstractController
{
	/**
	 * @Route("/login", name="login")
	 * @param AuthenticationUtils $utils
	 * @return Response
	 */
	public function	login (AuthenticationUtils $utils)
	{
		// get the login error if there is one
		$error = $utils->getLastAuthenticationError();

		// last username entered by the user
		$lastUsername = $utils->getLastUsername();

		return $this->render('public/account/login.html.twig', [
			'last_username' => $lastUsername,
			'error' => $error !== null
			// si $erreur différent de null
		]);
	}

	/**
	 * @Route("/logout", name="logout")
	 */
	public function logout() {

	}

	/**
	 * @Route("/password_update", name="password_update")
	 */
	public function accountPassword()
	{
		$passwordUpdate = new PasswordUpdate();

		$form = $this->createForm(PasswordUpdateType::class, $passwordUpdate);

		/*
		// Message Flash
		if ($form->isSubmitted() && $form->isValid()) {

			// Message Flash
			$this->addFlash('passwordUpdate_success', 'Modification de mot de passe réussi !');

			return $this->redirectToRoute('admin_course_index');
		} else {

			// Message Flash
			$this->addFlash('passwordUpdate_danger', 'Mot de passe non identique ou incorrect !');
		}
		*/

		return $this->render('public/account/account_password.html.twig',
			[
				'passwordUpdate' => $form->createView()
			]);
	}
}