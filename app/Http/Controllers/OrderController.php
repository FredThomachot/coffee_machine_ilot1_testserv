<?php

namespace App\Http\Controllers;

class OrderController extends Controller
{
	function liste() {
		$boissons = [	array('name' => 'expresso' ,'code' => 'exp', 'price' => 80),
						array('name' => 'double'   ,'code' => 'exp', 'price' => 80),
						array('name' => 'chocolate','code' => 'exp', 'price' => 80),
						array('name' => 'tea'      ,'code' => 'exp', 'price' => 80),
					];


		$ventes = [ array('id' => '1', 'boisson' => 'expresso' ,'date' => '16/01/2018 15:53'), 
			  		array('id' => '2', 'boisson' => 'latte'    ,'date' => '16/01/2018 15:53'),
			  		array('id' => '3', 'boisson' => 'Chocolate','date' => '17/01/2018 14:43'),
			  		array('id' => '4', 'boisson' => 'Tea'      ,'date' => '17/01/2018 14:45'),
			  		array('id' => '5', 'boisson' => 'expresso' ,'date' => '17/01/2018 15:45'),
			  		array('id' => '6', 'boisson' => 'Double'   ,'date' => '17/01/2018 16:47')
				];

		$nbSugar = 2;

		return view('pages/ventes', ['ventes' => $ventes, 'boissons' => $boissons, 'nbSugar' => $nbSugar]);
		//return view('pages/ventes', compact('boissons', 'ventes', 'nbSugar'));
	}
}