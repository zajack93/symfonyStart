<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* 
*/
class LuckyControllerRouteTWIG extends Controller
{
	/**
	* @Route("lucky/number/twig")
	*/
	public function number()
	{
		$number = mt_rand(0, 100);

		return $this->render('lucky/number.html.twig',  array(
			'number' => $number,

			));
	}
}

?>