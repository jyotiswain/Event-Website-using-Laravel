<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'name' => 'Vocal Vibes',
                'price' => '180',
                'description' => 'International Singing Contest for Students.',
                'category' => 'Singing',
                'gallery' => 'https://i.postimg.cc/7bvGqLF4/vibes.png'
            ],
            [
                'name' => 'Vocal Vibes',
                'price' => '180',
                'description' => 'International Singing Contest for Students.',
                'category' => 'Singing',
                'gallery' => 'https://i.postimg.cc/7bvGqLF4/vibes.png'
    
            ],
            
        ]);
    }
}
