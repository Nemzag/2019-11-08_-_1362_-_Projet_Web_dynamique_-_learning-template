<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 15/11/2019
 * Time: 11:10
 * Updated:
*/

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AccountController extends AbstractController
{
	/**
	 * @Route("/login", name="login")
	 */
	public function	login (AuthenticationUtils $utils)
	{
		// get the login error if there is one
		$error = $utils->getLastAuthenticationError();

		// last username entered by the user
		$lastUsername = $utils->getLastUsername();

		return $this->render('account/login.html.twig', [
			'last_username' => $lastUsername,
			'error' => $error !== null,
			// si $erreur différent de null
		]);
	}
}