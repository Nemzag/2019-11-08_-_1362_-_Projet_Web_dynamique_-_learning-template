<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2020-01-19
 * Time: 21h04
 * Updated:
*/


namespace App\Service\cart;

use App\Repository\CourseRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

// Méthode Lior Shamla : https://www.youtube.com/watch?v=_tWL-QDFuQ4
class CartService
{
	protected $session;

	// Comme le course repository était dans le controller mais pas dans le service,
	// on crée une injection de dépendance, ainsi que dans le constructeur.
	protected $courseRepository;

	public function __construct(SessionInterface $sessionInterface, CourseRepository $courseRepository)
	{
		$this->session = $sessionInterface;

		$this->courseRepository = $courseRepository;
	}

	public function add(int $id)
	{
		// Accéder à la session. Avec HttpFoundation par Request.
		// php bin/console debug:autowiring session
		// $request que je remplace par $session.
		// $session = $request->getSession();

		// Si on a rien choisi au départ je veux un tableau vide.
		// $panier = $session->get('panier', []);
		$panier = $this->session->get('panier', []);
		// Car on est pas par le constructeur. On utilise this->course.

		$panier[$id] = 1;

		/* // En cas panier multi‑ple, ce qui n'est pas le cas ici.
		if(!empty($panier[$id])) {
			$panier[$id]++;
		} else {
			$panier[$id] = 1;
		} */

		// Car on est pas par le constructeur. On utilise this->course.
		// $session->set('panier', $panier);
		$this->session->set('panier', $panier);

		// dd($session->get('panier'));
	}

	public function remove(int $id)
	{

		// $panier = $session->get('panier', []);
		$panier = $this->session->get('panier', []);

		if (!empty($panier[$id])) {

			unset($panier[$id]);
		}

		$this->session->set('panier', $panier);
	}

	public function getFullCart() : array {
		$panier = $this->session->get('panier', []);
		// Tableau associatif vide afin de éviter les erreur si aucun inscription active.

		// Création de un second tableau qui va puiser dans le premier.
		$panierWithData = [];

		foreach ($panier as $id => $quantity) {

			$panierWithData[] = [

				'course' => $this->courseRepository->find($id),
				// Comme le course repository était dans le controller mais pas dans le service,
				// on crée une injection de dépendance.

				'quantity' => 1 // Pas applicable dans ce cas.
			];
		}

		return $panierWithData;
	}

		public function getCartTotal(): float
		{
			$total = 0;

			// $panierWithData = $this->getFullCart();

			// foreach($panierWithData as $item) {
			foreach( $this->getFullCart() as $item) {

				// $totalItem = $item['course']->getPrice() /* * $time['quantity']*/;
				// $total += $totalItem;
				$total += $item['course']->getPrice() /* * $time['quantity'] */;
			}

			return $total;

		}

		public function getCartTotalToConfirm() : array {

			$panier = $this->session->get('panier', []);
			// Tableau associatif vide afin de éviter les erreur si aucun inscription active.

			// Création de un second tableau qui va puiser dans le premier.
			$panierWithData = [];

			foreach ($panier as $id => $quantity) {

				array_push($panierWithData, $this->courseRepository->find($id));
			}

			$this->session->invalidate();

			return $panierWithData;
		}
}

