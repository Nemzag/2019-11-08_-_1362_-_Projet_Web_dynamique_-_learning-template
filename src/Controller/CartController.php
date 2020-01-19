<?php

namespace App\Controller;

use App\Entity\Registration;
use App\Form\RegistrationType;
use App\Service\cart\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
	public function selection($id, CartService $cartService) {
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
	public function remove($id, CartService $cartService) {
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
}
