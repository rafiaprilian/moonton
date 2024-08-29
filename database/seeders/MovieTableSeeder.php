<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Guardian',
                'slug' => 'the-guardian',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=xnih2FX3y_4',
                'thumbnail' => 'https://m.media-amazon.com/images/I/51W5VsYS8JL._AC_.jpg',
                'rating' => 8.3,
                'is_featured' => 1,

            ],
            [
                'name' => '5 cm',
                'slug' => '5-cm',
                'category' => 'adventure',
                'video_url' => 'https://www.youtube.com/watch?v=wT2aPdXwdt8',
                'thumbnail' => 'https://media.suara.com/pictures/653x366/2023/05/05/84468-film-5-cm-hotstar.webp',
                'rating' => 9.3,
                'is_featured' => 0,
            ],
            [
                'name' => 'Kang Mak From Pee Mak',
                'slug' => 'kang-mak-from-pee-mak',
                'category' => 'comedy, horror',
                'video_url' => 'https://www.youtube.com/watch?v=T8m-IZhCi7M',
                'thumbnail' => 'https://akcdn.detik.net.id/community/media/visual/2024/07/12/kang-mak-from-pee-mak_34.jpeg?w=700&q=90',
                'rating' => 9.5,
                'is_featured' => 0,
            ]
        ];
        Movie::insert($movies);
    }
}
