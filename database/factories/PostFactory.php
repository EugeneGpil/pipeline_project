<?php

	namespace Database\Factories;

	use Exception;
	use Illuminate\Database\Eloquent\Factories\Factory;
	use JetBrains\PhpStorm\ArrayShape;

	/**
	 * @extends Factory
	 */
	class PostFactory extends Factory {
		/**
		 * Define the model's default state.
		 *
		 * @return array<string, mixed>
		 * @throws Exception
		 */
		#[ArrayShape(['title' => "string", 'active' => "int"])] public function definition(): array {
			return [
				'title'  => $this->faker->sentence,
				'active' => random_int(0, 1),
			];
		}
	}
