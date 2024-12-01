<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        // Create a specific user
        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'username' => $faker->unique()->userName,
            'phone' => $faker->unique()->phoneNumber, // Ensure unique phone
        ]);

        // Create additional test users
        User::factory(9)->create([
            'role' => 'user',
            'phone' => fn () => $faker->unique()->phoneNumber, // Ensure unique phone
            'username' => fn () => $faker->unique()->userName,
        ]);

        // Reset unique state to avoid memory leaks
        $faker->unique(true);
    }
}
