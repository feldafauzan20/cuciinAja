<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(OrderCatalogsSeeder::class);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@cuciinaja.com',
            'role' => 'admin', // Set role to admin
            'password' => bcrypt('admin'), // Password: password
        ]);

        User::factory()->create([
            'name' => 'Fauzan',
            'email' => 'fauzan@gmail.com',
            'role' => 'user',
            'password' => bcrypt('fauzan'), // Password: password
        ]);
    }
}