<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => "Diet",
            'firstname' => "Vincent",
            'email' => "dietvincent@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => "https://cdn.vox-cdn.com/thumbor/FPnbvLPFJ6Pnh96Mol1NzCW35oE=/0x0:3823x1595/1200x800/filters:focal(1607x493:2217x1103)/cdn.vox-cdn.com/uploads/chorus_image/image/70505683/ian_mckellan_gandalf_4k_lotr.0.jpg",
            'current_team_id' => null,
        ]);

        \App\Models\User::factory(10)->create();
    }
}
