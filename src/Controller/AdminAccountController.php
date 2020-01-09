<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminAccountController extends AbstractController
{
	/**
	 * @Route("/admin/login", name="admin_account_login")
	 * @param AuthenticationUtils $utils
	 * @return Response
	 */
    public function adminLogin(AuthenticationUtils $utils)
    {
	    // get the login error if there is one
	    $error = $utils->getLastAuthenticationError();

	    // last username entered by the user
	    $lastUsername = $utils->getLastUsername();

        return $this->render('public/account/admin.login.html.twig', [
	        'last_username' => $lastUsername,
	        'error' => $error !== null
	        // si $erreur différent de null
        ]);
    }

	/**
	 * @Route("/admin/logout", name="admin_account_logout")
	 */
	public function logout() {

	}
}




