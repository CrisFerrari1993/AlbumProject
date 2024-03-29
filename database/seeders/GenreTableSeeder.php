<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Album;
use App\Models\Genre;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre :: factory()
            -> count(20)
            -> create()
            -> each(function($genre) {

                $albums = Album :: inRandomOrder() -> limit(2) -> get();

                $genre -> albums() -> attach($albums);
            });
    }
}