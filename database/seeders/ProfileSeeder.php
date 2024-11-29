<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $profiles = [
            [
                'instagram' => 'cafe_123',
                'tiktok' => 'cafe_tiktok123',
                'whatsapp' => '081234567890',
                'phone' => '0211234567',
            ],
        ];

        foreach ($profiles as $profile) {
            Profile::create($profile);
        }
    }
}
