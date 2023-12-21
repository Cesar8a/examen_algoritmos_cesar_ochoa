<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
	/** @test */
	function it_welcomes_users_with_nickname()
	{
		$response = $this->get('saludo/Cochoa/wolf');
		$response->assertStatus(200);
		$response->assertSee('Bienvenido Cochoa, tu apodo es wolf');
	}

	/** @test */
	function it_welcomes_users_without_nickname()
	{
		$response = $this->get('saludo/Cochoa');
		$response->assertStatus(200);
		$response->assertSee('Bienvenido Cochoa');
	}
}
