<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RolesEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $owner = User::create([
            'username' => 'owner',
            'password' => Hash::make('Prokoders123'),
        ]);
        $owner->assignRole(RolesEnum::OWNER->value);
        User::factory()->count(10)->create();
    }
}
