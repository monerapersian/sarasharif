<?php

namespace Database\Seeders;

use App\Models\SaraInformation;
use Illuminate\Database\Seeder;

class SaraInformationSeeder extends Seeder
{
    public function run(): void
    {
        SaraInformation::firstOrCreate(
            ['id' => 1],
            [
                'profile_image' => null,
                'goals' => [],
                'activities' => [],
                'specializations' => [],
                'intro_title' => null,
                'intro_text' => null,
                'experience_years' => 0,
                'phone' => null,
                'whatsapp' => null,
                'instagram_username' => null,
                'email' => null,
            ]
        );
    }
}