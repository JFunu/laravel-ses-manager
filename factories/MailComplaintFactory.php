<?php

declare(strict_types=1);

namespace Database\Factories\Megaverse\LaravelSesManager\Eloquent;

use Illuminate\Database\Eloquent\Factories\Factory;
use Megaverse\LaravelSesManager\Eloquent\MailComplaint;
use Megaverse\LaravelSesManager\Eloquent\MailComplaintGroup;

class MailComplaintFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MailComplaint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'group_id' => MailComplaintGroup::factory(),
            'email' => $this->faker->email,
        ];
    }
}
