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

        User::factory()->create([
            'name' => 'Fahril Refiandi',
            'email' => 'fahril@teknovate.co.id',
            'username' => 'fahril',
            'password' => bcrypt('password'),
        ]);
    }
}
