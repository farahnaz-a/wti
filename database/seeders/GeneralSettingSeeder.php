<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'logo' => 'logo.svg',
            'favicon' => 'favicon.ico',
            'phone' => '016 4339 0112',
            'email' => 'info@successmindinstitute.com',
            'whatsapp_number' => '016 4339 0112',
            'address' => 'address',
            'facebook_group_name' => 'groups/successmindinstitute',
            'facebook_group_link' => 'https://www.facebook.com/groups/successmindinstitute',
            'facebook_page_name' => '@successmindinstitute',
            'facebook_page_link' => 'https://www.facebook.com/successmindinstitute',
        ]);
    }
}
