<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staffs')->insert([
            'id' => 1,
            'user_id' => 1,
            'role_id' => 1,
            'last_active' => now(),
            'last_ip' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
