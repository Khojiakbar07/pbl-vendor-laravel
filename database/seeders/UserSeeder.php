<?php

namespace Database\Seeders;

use App\Enums\UserImageEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => env('ADMIN_NAME', 'Admin'),
            'email' => env('ADMIN_MAIL', 'admin@example.com'),
            'email_verified_at' => now(),
            'password' => Hash::make(env('ADMIN_PASS', 'password')),
            'avatar' => UserImageEnum::user1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
