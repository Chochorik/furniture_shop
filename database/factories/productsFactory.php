<?php

namespace Database\Factories;

use App\Models\products;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class productsFactory extends Factory
{
    protected $model = products::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(),
            'main_image' => $this->faker->word(),
            'schema' => $this->faker->word(),
            'additionally' => $this->faker->word(),
            'rating' => $this->faker->boolean(),
            'characteristics' => $this->faker->words(),
            'schema_additional' => $this->faker->word(),
            'model' => $this->faker->word(),
            'schema_title' => $this->faker->word(),
            'schema_description' => $this->faker->text(),
        ];
    }
}
