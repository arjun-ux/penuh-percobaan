<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ApiKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('api_keys')->insert([
            'key' => Str::random(60),
            'secret' => Str::random(60),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
