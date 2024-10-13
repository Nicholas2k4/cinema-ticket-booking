<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'movie_title' => 'Avengers',
            'duration' => 168,
            'release_date' => '2023/10/12',
        ]);

        Movie::create([
            'movie_title' => 'Harry Potter',
            'duration' => 151,
            'release_date' => '2020/10/12',
        ]);

        Movie::create([
            'movie_title' => 'Transformers',
            'duration' => 125,
            'release_date' => '2023/01/12',
        ]);

        Movie::create([
            'movie_title' => 'Conjuring',
            'duration' => 110,
            'release_date' => '2021/11/12',
        ]);

        Movie::create([
            'movie_title' => 'The Meg',
            'duration' => 170,
            'release_date' => '2019/10/12',
        ]);
    }
}
