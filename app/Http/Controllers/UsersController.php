<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
	public function index()
	{
		return '<h1>Usuarios</h1>';
	}

	public function show($id)
	{
		return "<h1>Mostrando detalle del usuario: {$id}</h1>";
	}

	public function create()
	{
		return '<h1>Crear nuevo usuario</h1>';
	}
}
