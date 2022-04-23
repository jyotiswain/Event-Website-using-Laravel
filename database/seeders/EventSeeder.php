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
                'name' => 'Angry Birds',
                'price' => '50',
                'description' => 'Contest for school students. Fun with enjoyment.',
                'category' => 'Gaming',
                'gallery' => 'https://i.postimg.cc/XvxBM9Cm/1.png'
            ],
            // [
            //     'name' => 'CodeERA',
            //     'price' => '100',
            //     'description' => 'Debug the code and win exciting prizes.',
            //     'category' => 'Tech',
            //     'gallery' => 'https://i.postimg.cc/xdpcCn11/4.png'
    
            // ],
            // [
            //     'name' => 'Euphoria',
            //     'price' => '180',
            //     'description' => 'International Singing Contest for Students.',
            //     'category' => 'Singing',
            //     'gallery' => 'https://i.postimg.cc/mZMsnBCW/2.png'
    
            // ],
            // [
            //     'name' => 'Acring',
            //     'price' => '200',
            //     'description' => 'Acryling Painting Contest for students of all age groups.',
            //     'category' => 'Art',
            //     'gallery' => 'https://i.postimg.cc/WbvvLCwF/3.png'
    
            // ],
           
            // [
            //     'name' => 'Art Library',
            //     'price' => '200',
            //     'description' => 'Show your art collection and get the chance to display it in art museum.',
            //     'category' => 'Art',
            //     'gallery' => 'https://i.postimg.cc/vBY9cb91/9.png'
    
            // ],
            // [
            //     'name' => 'Best Resume',
            //     'price' => '90',
            //     'description' => 'International Singing Contest for Students.',
            //     'category' => 'Corporate',
            //     'gallery' => 'https://i.postimg.cc/J4vw1hJh/7.png'
    
            // ],
            // [
            //     'name' => 'Pizza Innovation',
            //     'price' => '150',
            //     'description' => 'Get Ready to do Experiments with Pizza.',
            //     'category' => 'Cooking',
            //     'gallery' => 'https://i.postimg.cc/t4q64XHL/6.png'
    
            // ],
            // [
            //     'name' => 'Plant Party',
            //     'price' => '60',
            //     'description' => 'Show your love to the greens and nourish them.',
            //     'category' => 'Eco',
            //     'gallery' => 'https://i.postimg.cc/vHZk7yYs/5.png'
    
            // ],
            // [
            //     'name' => 'Make A Shot',
            //     'price' => '300',
            //     'description' => 'Get Ready to become a star.',
            //     'category' => 'Fine Arts',
            //     'gallery' => 'https://i.postimg.cc/ry9xXdBS/8.png'
    
            // ],

            

        ]);
    }
}
