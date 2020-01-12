<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 2019-11-28
 * Time: 11h12
 * Updated:
*/


namespace App\Service;

use App\Entity\Contact;
// Utiliser du Twig pour afficher le formulaire.
use Swift_Mailer;
use Twig\Environment; // Mail en HTML → TWIG.

class ContactService
{
	/**
	 * @var \Swift_Mailer
	 */
	private $mailer;

	/**
	 * @var Environment
	 */
	private $renderer;

	// Instanciation
	public function __construct(\Swift_Mailer $mailer, Environment $renderer)
	{
		// Selon la documentation de Swift_Mailer
		$this->mailer = $mailer;
		$this->renderer = $renderer;
	}

	public function sendMail(Contact $contact) {

		$message = (new \Swift_Message())

			// le’s méthode’s
			->setFrom($contact->getEmail()) // Pour savoir qui a envoyé le message

			->setTo('contact@easylearning.be') // Pour savoir à qui est envoyé le message

			->setReplyTo($contact->getEmail())

			->setSubject($contact->getSubject())

			->setBody($this->renderer->render('public/contact/email_basic.html.twig', [
				'contact' => $contact]), // Pour envoyer les données
				'text/html');
		//'contentType' => 'text/html'
		// Convertir au format HTML

		$this->mailer->send($message); // Envoyer le mail
	}
}