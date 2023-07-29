<?php

namespace Database\Seeders;

use App\Models\Seminar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeminarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seminar::create([
            'image' => 'seminar1.jpg',
            'order' => 1,
        ]);
        Seminar::create([
            'image' => 'seminar2.jpg',
            'order' => 2,
        ]);
    }
}
