<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUsersController extends Controller
{
	/*
	Un pequeño truco para un controlador que solo tenga una acción, es decir solo un método público que represente una acción.
	Cambiamos en el controlador el nombre del método a __invoke; esto permite llamar al objeto como si fuera una función
	*/
	public function __invoke($name, $nickname = null)
	{
		$name = ucfirst($name);

		if ($nickname) {
			return "<h1>Bienvenido {$name}, tu apodo es {$nickname}</h1>";
		}else{
			return "<h1>Bienvenido {$name}<h1>";
		}
	}
}
