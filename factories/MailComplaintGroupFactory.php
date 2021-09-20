<?php

declare(strict_types=1);

namespace Database\Factories\Megaverse\LaravelSesManager\Eloquent;

use Illuminate\Database\Eloquent\Factories\Factory;
use Megaverse\LaravelSesManager\Eloquent\MailComplaintGroup;

class MailComplaintGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MailComplaintGroup::class;

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
            'complained_at' => $this->faker->dateTime,
            'payload' => $this->faker->sentence,
        ];
    }
}
