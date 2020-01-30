<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 12/11/2019
 * Time: 14:47
 * Updated:
*/

namespace App\Controller;

use App\Entity\User;

use App\Form\UserEditType;
use App\Repository\UserRepository;

use DateTime;
use Exception;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


/**
 * Class AccountController
 * @package App\Controller
 */
class AccountController extends AbstractController
{
	/**
	 * @Route("/login", name="login")
	 * @param AuthenticationUtils $utils
	 * @param UserRepository $userRepository
	 * @return Response
	 */
	public function login(AuthenticationUtils $utils, UserRepository $userRepository)
	{
		$user = $userRepository->findOneBy(Array('email' => $_POST['_username']));

		/*
		$user = $this->getDoctrine()
		->getRepository(UserController::class)
		->findOneBy(Array('email' => $username));
		*/

		// get the login error if there is one
		$error = $utils->getLastAuthenticationError();

		// last username entered by the user
		$lastUsername = $utils->getLastUsername();

		// Essai non‑concluant d'empechement de log si isDisabled == true
		/*
		if ($user->getIsDisabled() == true   && $user->getRole() == [
						"ROLE_USER",
						"ROLE_STUDENT",
						"ROLE_PROFESSOR"
					]) {
					// si $erreur différent de null)
					return $this->render('public/account/login.html.twig', [
						'last_username' => $lastUsername,
						'error' => $error !== null,
					]);

				} else { */
			return $this->render('public/account/login.html.twig', [
				'last_username' => $lastUsername,
				'error' => $error !== null,
			]);
	//	}
	}

	/**
	 * @Route("/logout", name="logout")
	 */
	public
	function logout()
	{

	}

	//=======================================================================================
}