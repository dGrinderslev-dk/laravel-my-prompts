<?php

namespace Database\Seeders;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DemoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => env('USER_DEMO_NAME'),
            'email' => env('USER_DEMO_EMAIL'),
            'password' => Hash::make(env('USER_DEMO_PASSWORD')),
        ]);
    }
}
