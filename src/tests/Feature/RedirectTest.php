<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Url;
use Tests\TestCase;
use Vinkla\Hashids\Facades\Hashids;

class RedirectTest extends TestCase
{
	use RefreshDatabase;

	public function test_redirect()
	{
		$url = Url::factory()->create();

		$response = $this->get(route('redirector', ['url' => Hashids::encode($url->id)]));

		$response->assertRedirect($url->url);
	}
}
