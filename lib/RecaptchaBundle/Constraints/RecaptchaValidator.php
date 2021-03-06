<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2020-01-17
 * Time: 23h23
 * Updated:
*/


namespace Grafikart\RecaptchaBundle\Constraints;

use ReCaptcha\ReCaptcha;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class RecaptchaValidator extends ConstraintValidator {

	/**
	 * @var RequestStack
	 */
	private $requestStack;

	/**
	 * @var ReCaptcha
	 */
	private $reCaptcha;

	public function __construct(RequestStack $requestStack, ReCaptcha $reCaptcha)
	{
		$this->requestStack = $requestStack;
		$this->reCaptcha = $reCaptcha;
	}

	/**
	 * @inheritDoc
	 */
	public function validate($value, Constraint $constraint)
	{
		$request = $this->requestStack->getCurrentRequest();

		$recaptchaResponse = $request->get('g-recaptcha-response');

		if(empty($recaptchaResponse)) {

			$this->addViolation($constraint);

			return;
		}
		$response = $this->reCaptcha

			->setExpectedHostname($request->getHost())

			->verify($recaptchaResponse, $request->getClientIp());

		// Success ou non ?
		if(!$response->isSuccess()) {

			// dump($response->getErrorCodes());
			$this->addViolation($constraint);
		}
	}

	private function addViolation(Constraint $constraint) {

		// Causait problème de désactivation des @Assert, HTML constraint.
		// $this->context->buildViolation($constraint->message)->addViolation();
		$this->context->addViolation($constraint->message);

	}
}