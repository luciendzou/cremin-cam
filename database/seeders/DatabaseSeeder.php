<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['numero_de_compte' => 'A02@5526'],
            [
                'name' => 'Inside Admin',
                'email' => 'inside.admin@cremincam.local',
                'numero_de_compte' => 'A02@5526',
                'password' => Hash::make('A020@2026'),
            ]
        );
    }
}
