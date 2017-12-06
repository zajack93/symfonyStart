<?php 

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
//aby dziedziczyć po klasie Controller
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
* 
*/
class LuckyControllerRoute extends Controller {
	
	/**
	* @Route("/lucky/numberos")
	*/
	public function number() {
		$number = mt_rand(0, 100);

		return new Response (
			'<html><body> Twoj mega szczesliwy numer to: '.$number.' wiec sie ciesz </body> </html>'

			);

	}

}

?>