<?php

namespace App\Controller;

use App\Entity\Registration;

use App\Form\InscriptionType;

use App\Repository\RegistrationRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/registration")
 */
class AdminRegistrationController extends AbstractController
{
	/**
	 * @Route("/", name="admin_registration_index", methods={"GET"})
	 * @param RegistrationRepository $registrationRepository
	 * @return Response
	 */
	public function index(RegistrationRepository $registrationRepository): Response
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted(["ROLE_ADMIN", "ROLE_SUPER_ADMIN"]);

			return $this->render('admin/registration/registration.index.html.twig', [
			'registrations' => $registrationRepository->findAll(),
		]);
	}

	/**
	 * @Route("/{id}", name="admin_registration_show", methods={"GET"})
	 * @param Registration $registration
	 * @return Response
	 */
	public function show(Registration $registration): Response
	{
		return $this->render('admin/registration/registration.show.html.twig', [
			'registration' => $registration,
		]);
	}

	/**
	 * @Route("/{id}/edit", name="admin_registration_edit", methods={"GET","POST"})
	 * @param Request $request
	 * @param Registration $registration
	 * @return Response
	 */
	public function edit(Request $request, Registration $registration): Response
	{
		$form = $this->createForm(InscriptionType::class, $registration);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$this->getDoctrine()->getManager()->flush();

			return $this->redirectToRoute('registration_index');
		}

		return $this->render('admin/registration/registration.edit.html.twig', [
			'registration' => $registration,
			'form' => $form->createView(),
		]);
	}

	/**
	 * @Route("/{id}", name="admin_registration_delete", methods={"DELETE"})
	 * @param Request $request
	 * @param Registration $registration
	 * @return Response
	 */
	public function delete(Request $request, Registration $registration): Response
	{
		if ($this->isCsrfTokenValid('delete' . $registration->getId(), $request->request->get('_token'))) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($registration);
			$entityManager->flush();
		}

		return $this->redirectToRoute('admin_registration_index');
	}
}
