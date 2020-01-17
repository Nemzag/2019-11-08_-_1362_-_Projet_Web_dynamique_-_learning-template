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
 * @Route("/registration")
 */
class RegistrationController extends AbstractController
{
    /**
     * @Route("/", name="registration_index", methods={"GET"})
     */
    public function index(RegistrationRepository $registrationRepository): Response
    {
        return $this->render('admin/registration/index.html.twig', [
            'registrations' => $registrationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="registration_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $registration = new Registration();
        $form = $this->createForm(InscriptionType::class, $registration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($registration);
            $entityManager->flush();

            return $this->redirectToRoute('registration_index');
        }

        return $this->render('admin/registration/new.html.twig', [
            'registration' => $registration,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="registration_show", methods={"GET"})
     */
    public function show(Registration $registration): Response
    {
        return $this->render('admin/registration/show.html.twig', [
            'registration' => $registration,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="registration_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Registration $registration): Response
    {
        $form = $this->createForm(InscriptionType::class, $registration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('registration_index');
        }

        return $this->render('admin/registration/edit.html.twig', [
            'registration' => $registration,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="registration_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Registration $registration): Response
    {
        if ($this->isCsrfTokenValid('delete'.$registration->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($registration);
            $entityManager->flush();
        }

        return $this->redirectToRoute('registration_index');
    }
}
