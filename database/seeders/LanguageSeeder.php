<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::insert([
            [
                'name' => "English",
                'code' => "en",
                'status' => true,
                'deleted' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Russian",
                'code' => "ru",
                'status' => true,
                'deleted' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Uzbek",
                'code' => "uz",
                'status' => true,
                'deleted' => false,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
