<?php

namespace App\Controller;

use App\Entity\Course;
use App\Entity\Registration;

use App\Form\RegistrationType;

use App\Repository\RegistrationRepository;
use App\Service\cart\CartService;
use App\Service\ContactService;

use Doctrine\ORM\EntityManagerInterface;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class Cart
 * @Route("/panier")
 */
class CartController extends AbstractController
{
	// Méthode Lior Shamla : https://www.youtube.com/watch?v=_tWL-QDFuQ4
	/**
	 * @Route("/", name="cart_index", methods={"GET"})
	 * @param CartService $cartService
	 * @return Response
	 */
	public function index(CartService $cartService)
		// public function index(RegistrationRepository $registrationRepository, CourseRepository $courseRepository, SessionInterface $session): Response // Car on a créé un service.
	{
		// Déplacer dans le « Service/cart/ContactService.php ».
		/*
		$panier = $session->get('panier', []);
		// Tableau associatif vide afin de éviter les erreur si aucun inscription active.

		// Création de un second tableau qui va puiser dans le premier.
		$panierWithData = [];

		foreach($panier as $id => $quantity) {
			$panierWithData[] = [
				'course' => $courseRepository->find($id),
				'quantity' => 1 // Pas applicable dans ce cas.
			];
		}*/

		// Déplacer dans le service
		/*
    	$panierWithData = $cartService->getFullCart();

	    $total = 0;

	    foreach($panierWithData as $item) {
	    	$totalItem = $item['course']->getPrice() /* * $time['quantity']*/;
		/*
		$total += $totalItem;
	}
	*/

		// On invoque le service créé dans « Service/cart/CartService.php ».
		// Optimisation de code.
		// $panierWithData = $cartService->getFullCart();

		// $total = $cartService->getCartTotal();

		return $this->render('public/cart/cart.index.html.twig', [
			// 'registrations' => $panierWithData,
			'registrations' => $cartService->getFullCart(),
			// 'total' => $total,
			'total' => $cartService->getCartTotal(),
		]);
	}

	// Méthode Lior Shamla : https://www.youtube.com/watch?v=_tWL-QDFuQ4

	/**
	 * @Route("/selection/{id}", name="cart_selection")
	 * @param $id
	 * @param CartService $cartService
	 * @return RedirectResponse
	 */
	public function selection($id, CartService $cartService)
	{
		// public function selection($id, SessionInterface $session) { // Car on a créé un service.

			$cartService->add($id);

			return $this->redirectToRoute("cart_index");

		// Déplacer dans le « Service/cart/ContactService.php ».
		/*
		// Accéder à la session. Avec HttpFoundation par Request.
		// php bin/console debug:autowiring session
		// $request que je remplace par $session.
		// $session = $request->getSession();

		// Si on a rien choisi au départ je veux un tableau vide.
		$panier = $session->get('panier', []);

		$panier[$id] = 1;
		/* // En cas panier multi‑ple, ce qui n'est pas le cas ici.
		if(!empty($panier[$id])) {
			$panier[$id]++;
		} else {
			$panier[$id] = 1;
		} */

		/*
		$session->set('panier', $panier);

		// dd($session->get('panier'));
		*/
	}

	/**
	 * @Route("/remove/{id}", name="cart_remove")
	 * @param $id
	 * @param CartService $cartService
	 * @return RedirectResponse
	 */
	public function delete($id, CartService $cartService)
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
		$this->denyAccessUnlessGranted(['ROLE_USER', 'ROLE_STUDENT']);
		// public function remove($id, SessionInterface $session) { // Car on a créé un service.

		// Déplacer dans le « Service/cart/ContactService.php ».
		/*
		$panier = $session->get('panier', []);

		if(!empty($panier[$id])) {

			unset($panier[$id]);
		}

		$session->set('panier', $panier);
		*/

		$cartService->remove($id);

		return $this->redirectToRoute("cart_index");
	}

	/**
	 * @Route("/erase/{id}", name="public_cart_erase")
	 * @param Request $request
	 * @param Registration $registration
	 * @return Response
	 */
	public function erase(Request $request, Registration $registration) : Response
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
		$this->denyAccessUnlessGranted(['ROLE_USER', 'ROLE_STUDENT']);

		// Ajouter effacement de l'image si suppression du cours.

		$entityManager = $this->getDoctrine()->getManager();

		$entityManager->remove($registration);

		$entityManager->flush();

		// Message Flash
		$this->addFlash('public_registration_danger', 'Cours supprimé !');

		return $this->redirectToRoute("public_registration_index");
	}


	/**
	 * @Route ("/confirm", name="cart_confirm_subscription")
	 * @param CartService $cartService
	 * @param ContactService $contactService
	 * @param EntityManagerInterface $entityManager
	 * @param Security $security
	 * @param RegistrationRepository $registrationRepository
	 * @return RedirectResponse
	 * @throws Exception
	 */
	public
	function confirmSubscription(CartService $cartService, ContactService $contactService, EntityManagerInterface $entityManager, Security $security, RegistrationRepository $registrationRepository) // Valider les inscriptions
	{
		// Vérification de niveau afin d'accéder à la fonction.
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
		$this->denyAccessUnlessGranted(['ROLE_USER', 'ROLE_STUDENT']);

		// Prevention de enregistrement du même cours deux fois dans la data‑base (doublon)
		$registrationUserCourseId = null;

		$registrationMessage = "";
		$items = $cartService->getCartTotalToConfirm();

		foreach ($items as $item) {

			// Prevention de enregistrement du même cours deux fois dans la data‑base (doublon)
			$registrationUserCourseId = $registrationRepository->findOneBy(array(
				'user' => $security->getUser()->getId(),
				'course' => $item->getId()));

			// Prevention de enregistrement du même cours deux fois dans la data‑base (doublon)
			if (!isset($registrationUserCourseId)) {

				$amount = $item->getPrice();

				$createdAt = new \DateTime('now');

				$registration = new Registration();

				$registration->setCourse($item);
				$registration->setUser($security->getUser());
				$registration->setAmount($amount);
				$registration->setCreatedAt($createdAt);

				$entityManager->persist($registration);
				$entityManager->flush();

				$registrationMessage .= $item->getName() . " " . $item->getPrice() . "€. ";
			}
		}
		$this->addFlash(
			'public_confirm_success',
			'Le panier a été correctemênt sauvegardé !'
		);

		// Envoyer un message de confirmation d'inscription
		$mainMessage = "Vous avez été inscrit à ce(s) cour(s) : " . $registrationMessage;
		$mainMessage .= "Coût total à payer : " . $cartService->getCartTotal() . " €";

		// Prevention de enregistrement du même cours deux fois dans la data‑base (doublon)
		// Prevention de courriel inutile.
		if (!isset($registrationUserCourseId)) {
			$contactService->registrationByMail($this->getUser()->getEmail(), "Confirmation d'inscription", $mainMessage);
		}

		return $this->redirectToRoute("home");
	}
}
