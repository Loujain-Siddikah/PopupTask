<?php

namespace Database\Factories;

use App\Enums\RolesEnum;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Create the user attributes
        $userAttributes = [
            'username' => fake()->unique()->userName,
            'password' => Hash::make('Sd00000000'),
        ];
        
        return $userAttributes;
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            $user->assignRole(RolesEnum::USER->value);
        });
    }
}
