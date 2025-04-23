<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Fiction',
            'Self Improvement',
            'Non-Fiction',
            'Web Development',
            'Database Management',
            'AI and Machine Learning',
        ];

        foreach ($categories as $category) {
            \App\Models\Category::factory()->create([
                'name' => $category
            ]);
        }
    }
}
