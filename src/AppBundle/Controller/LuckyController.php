<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController {
	/**
	 * @Route("/lucky/number");
	 */
	public function showNumber(){
		$number = rand(0,10);
		return new Response("This is my number:$number");
	}
}