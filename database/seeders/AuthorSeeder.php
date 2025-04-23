<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            'James Clear',
            'Paulo Coelho',
            'Simon Sinek',
            'Tere Liye',
            'Matt Stauffer',
            'Kevin Kline',
            'Regina O. Obe',
            'Leo S. Hsu',
            'Josh Patterson',
            'Adam Gibson'

        ];

        foreach ($authors as $author) {
            \App\Models\Author::factory()->create([
                'name' => $author
            ]);
        }
    }
}
