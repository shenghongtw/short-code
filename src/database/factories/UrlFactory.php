<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Url>
 */
class UrlFactory extends Factory
{
	protected $model = Url::class;

	public function definition()
	{
		return [
			'url' => $this->faker->url,
		];
	}
}
