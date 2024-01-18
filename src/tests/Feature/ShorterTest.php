<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShorterTest extends TestCase
{
	use RefreshDatabase;
	use WithFaker;

	public function test_shorter()
	{
		$response = $this->post(route('shorter'), [
			'url' => $url = $this->faker->url,
		]);

		$response->assertSuccessful();
		$this->assertDatabaseHas('urls', ['url' => $url]);
	}
}