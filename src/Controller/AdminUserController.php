<?php

namespace App\Controller;

use App\Entity\User;

use App\Form\AdminUserEditType;
use App\Form\AdminUserType;
use App\Form\UserType;
use App\Repository\UserRepository;
use DateTime;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class AdminUserController
 * @package App\Controller
 * @Route("/admin/user")
 */
class AdminUserController extends AbstractController
{
	/**
	 * @Route("/", name="admin_user_index", methods={"GET"})
	 * @param UserRepository $userRepository
	 * @param Security $security
	 * @return Response
	 */
	public function index(UserRepository $userRepository, Security $security): Response
	{
		$this->denyAccessUnlessGranted(['ROLE_ADMIN', 'ROLE_SUPER_ADMIN']);

		$user = $userRepository->findAll();

		// Pour accédé au role actuel il faut employer le module securité (dans use et cette fonction),
		// pour pouvoir vérifier le rang.
		$userRole = $security->getUser()->getRoles();
		// ... do whatever you want with $user

		// Visibilité du cours.
		$_GET ['disabled'] = $_GET ['disabled'] ?? '';
		$_GET ['id'] = $_GET ['id'] ?? '';

		if ($_GET['disabled'] <= 1 && $_GET['id'] != null) {
			$userId = $userRepository->find($_GET['id']);
			// var_dump($_GET['visibility']);exit;

			if ($userRole == ['ROLE_ADMIN']) {

				if ($userId->getRoles() == ['ROLE_ADMIN'] OR $userId->getRoles() == ['ROLE_SUPER_ADMIN']) {

					// Message Flash
					$this->addFlash('user_warning', "Un administrateur ne peut pas désactivé un autre administrateur ou le super‑administrateur.");

				} else {

					if ($_GET['disabled'] == 1) {

						// var_dump($_GET['visibility']);exit;
						$userId->setIsDisabled(1);

					} elseif ($_GET['disabled'] == 0) {

						// var_dump($_GET['visibility']);exit;
						$userId->setIsDisabled(0);
					}
					$entityManager = $this->getDoctrine()->getManager();
					$entityManager->persist($userId);
					$entityManager->flush();

					// Message Flash
					$this->addFlash('user_disabled', $userId->getId() == 0 ? 'Édition activation de compte réussi & accompli !' : 'Édition désactivation de compte réussi & accompli !');
				}
			} elseif ($userRole == ['ROLE_SUPER_ADMIN']) {

				if ($_GET['disabled'] == 1) {

					// var_dump($_GET['visibility']);exit;
					$userId->setIsDisabled(1);

				} elseif ($_GET['disabled'] == 0) {

					// var_dump($_GET['visibility']);exit;
					$userId->setIsDisabled(0);
				}
				$entityManager = $this->getDoctrine()->getManager();
				$entityManager->persist($userId);
				$entityManager->flush();

				// Message Flash
				$this->addFlash('user_disabled', $userId->getId() == 0 ? 'Édition activation de compte réussi & accompli !' : 'Édition désactivation de compte réussi & accompli !');
			}
		}

		return $this->render('admin/user/user.index.html.twig', [
			'users' => $userRepository->findAll(),
		]);
	}

	/**
	 * @Route("/new", name="admin_user_new", methods={"GET","POST"})
	 * @param Request $request
	 * @return Response
	 * @throws Exception
	 */
	public function new(Request $request): Response
	{

		$this->denyAccessUnlessGranted(['ROLE_ADMIN', 'ROLE_SUPER_ADMIN']);

		/*
		return $this->redirectToRoute('admin_course_index');
	}

	return $this->render('admin/course/course.new.html.twig', [
		'course' => $course,
		'form' => $form->createView(),
	]);
		*/
		//────────────────────────────────────────────────────────────────────────
		$user = new User();

		$form = $this->createForm(AdminUserType::class, $user);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$now = new DateTime('now');

			$user->setCreatedAt($now);
			$user->setUpdatedAt($now);
			$user->setLastLogAt($now);

			$user->setIsDisabled(false);

			if (empty($user->getImageFile())) $user->setImage('default.jpg');

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($user);
			$entityManager->flush();

			// Message Flash
			$this->addFlash('course_success', 'Ajout réussi & accômpli !');

			return $this->redirectToRoute('admin_user_index');
		}

		return $this->render('admin/user/user.new.html.twig', [
			'user' => $user,
			'adminUserForm' => $form->createView(),
		]);
	}

	/**
	 * @Route("/{id}", name="admin_user_show", methods={"GET"})
	 * @param User $user
	 * @return Response
	 */
	public function show(User $user): Response
	{
		$this->denyAccessUnlessGranted(['ROLE_ADMIN', 'ROLE_SUPER_ADMIN']);

		return $this->render('admin/user/user.show.html.twig', [
			'user' => $user,
		]);
	}

	/**
	 * @Route("/{id}/edit", name="admin_user_edit", methods={"GET","POST"})
	 * @param Request $request
	 * @param User $user
	 * @return Response
	 */
	public function edit(Request $request, User $user): Response
	{
		$this->denyAccessUnlessGranted(['ROLE_ADMIN', 'ROLE_SUPER_ADMIN']);

		// 2020‑01‑03 ‒ 22H49 : gestion de image.
		$imageFile = $user->getImage();

		$form = $this->createForm(AdminUserEditType::class, $user);
		$form->handleRequest($request);

			// Si image existe, la garder, sinon image par image défaut.
			if ($form->isSubmitted() && $form->isValid()) {

				if (!empty($user->getImage())) {

					$user->setImage($user->getImage());

				} elseif (empty($user->getImageFile())) {

					$user->setImage('default.jpg');
				}

			$this->getDoctrine()->getManager()->flush();

			// Message Flash
			$this->addFlash('user_success', 'Promotion réussi & accompli !');

			return $this->redirectToRoute('admin_user_index');
		}
		// Message Flash
		$this->addFlash('admin_user_danger', 'Échec de la promotion !');

		return $this->render('admin/user/user.edit.html.twig', [
			'user' => $user,
			'adminUserForm' => $form->createView(),
			'errors' => $form->getErrors(true, true),
		]);
	}

	/*
	/**
	 * @Route("/{id}", name="admin_user_delete", methods={"DELETE"})
	 * @param Request $request
	 * @param User $user
	 * @return Response
	 */
	/*
	public function delete(Request $request, User $user): Response
	{
		if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($user);
			$entityManager->flush();
		}

		return $this->redirectToRoute('user_index');
	}
	*/
}
