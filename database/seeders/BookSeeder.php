<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Atomic Habits',
                'authors' => [2],
                'category_id' => 2,
                'image' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/products/-omxcm6-m8.jpg'
            ],
            [
                'title'=>'Bintang',
                'authors' => [4],
                'category_id' => 1,
                'image'=>'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/ccmq4kges6gstnsrrtxabw.jpg'
            ],
            [
                'title'=>'The Alchemist',
                'authors' => [2],
                'category_id' => 1,
                'image'=>'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/products/smm437-64c.jpg'
            ],
            [
                'title'=>'Start With Why',
                'authors' => [3],
                'category_id' => 2,
                'image'=>'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/products/twswcz6t2-.jpg'
            ],
            [
                'title'=>'Laravel Up & Running',
                'authors' => [5],
                'category_id' => 4,
                'image'=>'https://learning.oreilly.com/library/cover/9781098153250/250w/'
            ],
            [
                'title'=>'SQL in a Nutshell, 4th Edition',
                'authors' => [6,7,8],
                'category_id' => 5,
                'image'=>'https://m.media-amazon.com/images/I/81oCWVZVlZL._SL1500_.jpg/'
            ],
            [
                'title'=>'Deep Learning',
                'authors' => [9,10],
                'category_id' => 6,
                'image'=>'https://learning.oreilly.com/library/cover/9798341604728/250w/'
            ]
        ];

        foreach ($books as $book) {
            $item = \App\Models\Book::factory()->create([
                'title' => $book['title'],
                'category_id' => $book['category_id'],
                'image' => $book['image']
            ]);

            $item->authors()->attach($book['authors']);
        }
    }
}
