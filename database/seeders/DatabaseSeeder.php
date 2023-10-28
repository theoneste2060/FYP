<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // \App\Models\User::factory(50)->create();

    \App\Models\User::factory()->create([
        'name' => 'faustin',
        'lname' => 'iradukunda',
        'role' => 'Admin',
        'email' => 'ifaustin89@gmail.com',
        'password' => Hash::make('12345'), 
        'avatar' => 'avatar-8.JPG'
    ]);
}
}
