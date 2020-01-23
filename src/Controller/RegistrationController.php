<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2020-01-18
 * Time: 23h25
 * Updated:
*/


namespace App\Controller;

use App\Entity\Course;
use App\Entity\Registration;

use App\Form\InscriptionType;

use App\Repository\CourseRepository;
use App\Service\cart\CartService;
use DateTime;

use Exception;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class Registration
 * @Route("/inscription")
 */
class RegistrationController extends AbstractController
{
	/**
	 * @Route("/new", name="registration_new", methods={"GET","POST"})
	 * @param Request $request
	 * @param CourseRepository $courseRepository
	 * @param Security $security
	 * @param CartService $cartService
	 * @return Response
	 */
	public function new(Request $request, CourseRepository $courseRepository, CartService $cartService): Response
	{
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
		$this->denyAccessUnlessGranted(['ROLE_USER', 'ROLE_STUDENT']);

		$registration = new Registration();

		$form = $this->createForm(InscriptionType::class, $registration);
		$courses = $request->request->all()['inscription']['course'] ?? null;
		if($courses) {
			foreach($courses as $course)
			{
				$cartService->add($course);
			}
			return $this->redirectToRoute('cart_index');
		}

		return $this->render('public/registration/registration.new.html.twig', [
			'registration' => $registration,
			'course' => $courseRepository->findAll(),
			'formCourseRegistration' => $form->createView(),
		]);
	}
}