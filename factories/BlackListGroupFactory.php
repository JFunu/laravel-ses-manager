<?php

declare(strict_types=1);

namespace Database\Factories\Megaverse\LaravelSesManager\Eloquent;

use Illuminate\Database\Eloquent\Factories\Factory;
use Megaverse\LaravelSesManager\Eloquent\BlackListGroup;

class BlackListGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlackListGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'driver' => $this->faker->word,
            'reason' => $this->faker->sentence,
            'bounced_at' => $this->faker->dateTime,
            'payload' => $this->faker->sentence,
        ];
    }
}
