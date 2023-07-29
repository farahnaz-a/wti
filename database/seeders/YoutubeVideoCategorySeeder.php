<?php

namespace Database\Seeders;

use App\Models\YoutubeVideoCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YoutubeVideoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        YoutubeVideoCategory::create([
            'name' => 'Laravel',
            'image' => 'laravel.jpg'
        ]);
        YoutubeVideoCategory::create([
            'name' => 'Web Design',
            'image' => 'web-design.jpg'
        ]);
    }
}
