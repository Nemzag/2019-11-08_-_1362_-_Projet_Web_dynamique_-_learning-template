<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 21/03/2020
 * Time: 23:06
 * Updated:
*/


namespace App\LoginEvent;

use DateTime;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

// https://symfony.com/doc/4.4/session/locale_sticky_session.html
// https://symfony.com/doc/current/components/security/authentication.html
// https://rihards.com/2018/symfony-login-event-listener/
/**
 * Stores the locale of the user in the session after the
 * login. This can be used by the LocaleSubscriber afterwards.
 */
class UserLoginEvent extends AbstractController
{
	public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
	{
		$user = $event->getAuthenticationToken()->getUser();

		$now = new DateTime('now');

		$user->setLastLogAt($now);

		$entityManager = $this->getDoctrine()->getManager();
		$entityManager->persist($user);
		$entityManager->flush();
	}
}