<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
	private $encoder;

	public function __construct(UserPasswordEncoderInterface $encoder)
	{
		$this->encoder = $encoder;
	}

	/**
	 * @Route("/security", name="security")
	 * @param Request $request
	 * @param EntityManagerInterface $entityManager
	 * @param UserPasswordEncoderInterface $passwordEncoder
	 * @return RedirectResponse|Response
	 * @throws Exception
	 */
	public function registration(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordEncoder): Response
	{
		$user = new User();

		// 2020‑01‑03 ‒ 22H49 : gestion de image.
		$imageFile = $user->getImage();

		$form = $this->createForm(UserType::class, $user);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$now = new \DateTime('now');

			$user->setCreatedAt($now);
			$user->setUpdatedAt($now);
			$user->setLastLogAt($now);
			$user->setRole(["ROLE_USER"]);
			$user->setIsDisabled(false);

			if (empty($user->getImageFile())) $user->setImage('default.jpg');


			$hash = $passwordEncoder->encodePassword(
				$user,
				$user->getPassword()
			);

			// encode the plain password
			$user->setPassword($hash);


			$entityManager->persist($user);
			$entityManager->flush();

			// Message Flash
			$this->addFlash('registration_success', 'Inscription réussi & accompli !');

			// do anything else you need here, like send an email

			return $this->redirectToRoute('home');
		} elseif($form->isSubmitted()) {

			// Message Flash
			$this->addFlash('registration_danger', 'Échec de l\'inscription !');

			return $this->render('public/security/registration.html.twig', [

				'registration' => $form->createView(),
				'errors' => $form->getErrors(true, true),
			]);

		} else {

			return $this->render('public/security/registration.html.twig', [

				'registration' => $form->createView(),
				'errors' => $form->getErrors(true, true),
			]);
		}
	}
}