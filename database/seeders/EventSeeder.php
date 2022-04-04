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
                'name' => 'Art Analog',
                'price' => '150',
                'description' => 'International Art Contest. Last Date to Register: 25th May, 2022.',
                'category' => 'Art',
                'gallery' => 'http://4.bp.blogspot.com/-uXEuFirFkQI/VEkejpf7cSI/AAAAAAAAeII/SJqy5yxWw6o/s1600/Toyota%2Bencourages%2Bkids%2Bto%2Bbe%2Bcreative%2Bin%2B2015%2BDream%2BCar%2BArt%2BContest_Luo-Tong%2BSim%2B(under%2B8)%2BUK%2Bwinner%2B2014.jpg'
    
            ],
            [
                'name' => 'Ping your Paintbrush',
                'price' => '250',
                'description' => 'National Paint Contest Students. Last Date to Register: 20th May, 2022.',
                'category' => 'Painting',
                'gallery' => 'https://iv1.lisimg.com/image/5887035/640full.jpg'
    
            ],
            [
                'name' => 'Vocal Cords Check',
                'price' => '200',
                'description' => 'Singing Contest for College Students. Last Date to Register: 28th May, 2022.',
                'category' => 'Singing',
                'gallery' => 'https://i.pinimg.com/originals/84/6b/62/846b62c446f42572184122bda2a0fc3e.jpg'
    
            ],
            [
                'name' => 'Quizion',
                'price' => '100',
                'description' => 'National Quiz Contest. Last Date to Register: 20th May, 2022.',
                'category' => 'Quiz',
                'gallery' => 'https://pin.it/3Z3Dsru'
    
            ]
        ]);
    }
}
