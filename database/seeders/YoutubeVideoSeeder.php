<?php

namespace Database\Seeders;

use App\Models\YoutubeVideo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YoutubeVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        YoutubeVideo::create([
            'category_id'   => 1,
            'video'         => 'HqU3OVgy3Gk'
        ]);
        YoutubeVideo::create([
            'category_id'   => 1,
            'video'         => 'JnG1OOkDpe8'
        ]);
        YoutubeVideo::create([
            'category_id'   => 1,
            'video'         => 'tR9VHoj_kJM'
        ]);
        YoutubeVideo::create([
            'category_id'   => 2,
            'video'         => 'Yz8DHG87DVg'
        ]);
        YoutubeVideo::create([
            'category_id'   => 2,
            'video'         => 'DjX_BIGcDYE'
        ]);
        YoutubeVideo::create([
            'category_id'   => 2,
            'video'         => 'sr01fLklMZU'
        ]);
    }
}
