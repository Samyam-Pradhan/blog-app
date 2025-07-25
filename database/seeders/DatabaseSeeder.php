<?php

namespace Database\Seeders;

use App\Models\Post;
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

        User::factory()->create([
            'id' => 1, // make sure this ID matches the one in PostFactory
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('test123'),
        ]);
        Post::factory()->count(10)->create();
    }
}
