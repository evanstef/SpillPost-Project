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
        User::factory(12)->create();

        User::factory()->create([
            'name' => 'Evan',
            'username' => 'evansc45',
            'email' => 'evan@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'EvanSC',
            'username' => 'evan_sc_323',
            'email' => 'evan333@gmail.com',
        ]);
    }
}
