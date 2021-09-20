<?php

declare(strict_types=1);

namespace Database\Factories\Megaverse\LaravelSesManager\Eloquent;

use Illuminate\Database\Eloquent\Factories\Factory;
use Megaverse\LaravelSesManager\Eloquent\BlackListItem;
use Megaverse\LaravelSesManager\Eloquent\BlackListGroup;

class BlackListItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlackListItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'group_id' => BlackListGroup::factory(),
            'email' => $this->faker->email,
            'blacklisted_at' => $this->faker->dateTime,
        ];
    }
}
