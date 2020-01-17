<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2020-01-17
 * Time: 22h58
 * Updated:
*/


namespace Grafikart\RecaptchaBundle\Constraints;


use Symfony\Component\Validator\Constraint;

class Recaptcha extends Constraint
{
		public $message = "Captcha Invalide";
}