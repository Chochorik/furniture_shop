<?php

namespace Database\Factories;

use App\Models\specialOffer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class specialOfferFactory extends Factory
{
    protected $model = specialOffer::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'sale' => $this->faker->randomFloat(),
        ];
    }
}
