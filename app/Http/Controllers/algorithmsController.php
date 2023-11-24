<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class algorithmsController extends Controller
{
	// Index
	public function index(){
		$alice = 0;
		$bob = 0;

		// Valores aleatorios
		$a = [random_int(1, 100), random_int(1, 100), random_int(1, 100)];
		$b = [random_int(1, 100), random_int(1, 100), random_int(1, 100)];

		// Comparación de valores
		for ($i=0; $i<count($a); $i++) {
			if($a[$i] > $b[$i]){
				$alice++;
			}else if($a[$i] < $b[$i]){
				$bob++;
			}
		}

		$persona1 = ['nombre' => 'Alice', 'categoria' => $alice];
		$persona2 = ['nombre' => 'Bob', 'categoria' => $bob];

		// Enviamos a la vista
		return view('algoritmos-tema-1')
				->with('a', $a)
				->with('b', $b)
				->with('output', array($persona1, $persona2));
	}
}
