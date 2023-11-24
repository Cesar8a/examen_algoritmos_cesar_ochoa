<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wordsController extends Controller
{
	// Index
	public function index() {
		$string = "Érase una vez una niñita que lucía una hermosa capa de color rojo. Como la niña la usaba muy a menudo, todos la llamaban Caperucita Roja. Un día, la mamá de Caperucita Roja la llamó y le dijo: —Abuelita no se siente muy bien, he horneado unas galletitas y quiero que tú se las lleves. —Claro que sí —respondió Caperucita Roja, poniéndose su capa y llenando su canasta de galletas recién horneadas. Antes de salir, su mamá le dijo: — Escúchame muy bien, quédate en el camino y nunca hables con extraños. —Yo sé mamá —respondió Caperucita Roja y salió inmediatamente hacia la casa de la abuelita.";
		$string = self::clearString($string);
		$stringToArray = explode(" ", $string);
		# print_r(array_count_values($stringToArray));

		return response()->json(array(
			'countWords' => array_count_values($stringToArray),
			'status' => 'success'
		), 200);

	}

	private function clearString($s) { 
		//Quitando Caracteres Especiales 
		$s = str_replace('"', '', $s);
		$s = str_replace(':', '', $s);
		$s = str_replace('.', '', $s);
		$s = str_replace(',', '', $s);
		$s = str_replace(';', '', $s);
		$s = str_replace('—', '', $s);

		return strtolower($s); 
	}

}
