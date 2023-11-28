<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123123'),
            'role' => 1,
        ]);

        Category::create([
            'name' => 'Makanan',
            'description' => 'Makanan Berat'
        ]);
        Category::create([
            'name' => 'Makanan',
            'description' => 'Makanan ringan'
        ]);
        Category::create([
            'name' => 'minuman',
            'description' => 'minuman Berat'
        ]);
        Category::create([
            'name' => 'minuman',
            'description' => 'minuman ringan'
        ]);
    }
}
