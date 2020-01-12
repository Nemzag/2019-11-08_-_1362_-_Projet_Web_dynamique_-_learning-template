<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 2019-11-29
 * Time: 09h37
 * Updated:
*/

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Service\ContactService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
	/**
	 * @Route("/contact", name="contact")
	 * @param Request $request
	 * @param ContactService $contactService
	 * @return RedirectResponse|Response
	 */
    public function contact(Request $request, ContactService $contactService)
    {
    	$contact = new Contact();
    	// Pour importer au survole la surbrillance et « Import class »
	    // Alt+Shift+Enter
    	$form = $this->createForm(ContactType::class, $contact);

    	// Récupérer le’s données
	    $form->handleRequest($request);

	    if($form->isSubmitted() && $form->isValid()) {
		    // Envoi du mail via le service
		    $contactService->sendMail($contact);

		    // Message flash
		    $this->addFlash('contact_success', 'Votre courriel a bien été envoyé.');

		    return $this->redirectToRoute('contact');
	    }

        return $this->render('public/contact/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
