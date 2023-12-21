<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
	/** @test */
	public function it_loads_the_users_list_page()
	{
		$response = $this->get('/usuarios');
		$response->assertStatus(200);
		$response->assertSee('Usuarios');
	}

	/** @test */
	public function it_loads_the_users_details_page()
	{
		$response = $this->get('/usuarios/5');
		$response->assertStatus(200);
		$response->assertSee('Mostrando detalle del usuario: 5');
	}

	/** @test */
	function it_loads_the_new_users_page()
	{
		# Para tener un poco más de contexto sobre un error podemos usar el método:
		# $this->withoutExceptionHandling();

		$this->get('/usuarios/nuevo')
			->assertStatus(200)
			->assertSee('Crear nuevo usuario');
	}
}
