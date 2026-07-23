<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@sarasharif.ir'],
            [
                'name' => 'SaraSharif',
                'password' => Hash::make('12345678'),
            ]
        );
    }
}