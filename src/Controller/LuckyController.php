<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

/*Obiekt odpowiedzi Symfony 
Symfony dostarcza klasę Response: reprezentację PHP komunikatu odpowiedzi HTTP. Dzięki temu aplikacja może użyć interfejsu obiektowego do skonstruowania odpowiedzi, która musi zostać zwrócona do klienta:
*/

/**
* 
*/
class LuckyController
{
	
	public function number() {
		$number = mt_rand(0, 100);

		return new Response(
			'<html><body>Lucky number: '.$number.'</body></html>'

			);
	}
}


 ?>