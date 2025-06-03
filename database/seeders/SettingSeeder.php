<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate([
            'email' => 'info@digitalagency.com',
        ],[
            'name' => 'Digital Agency',
            'address' => '123 Main St, Anytown, USA',
            'email' => 'info@digitalagency.com',
            'phone' => '+1234567890',
            'facebook' => 'https://facebook.com/digitalagency',
            'twitter' => 'https://twitter.com/digitalagency',
            'instagram' => 'https://instagram.com/digitalagency',
            'linkedin' => 'https://linkedin.com/digitalagency',
        ]);
    }
}
