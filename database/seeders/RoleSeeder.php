<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'id' => 1,
            'string' => 'Admin',
            'permissions' => `["1000"]`,
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'string' => 'Staff',
            'permissions' => `["1000"]`,
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 3,
            'string' => 'Disabled',
            'permissions' => `[]`,
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
