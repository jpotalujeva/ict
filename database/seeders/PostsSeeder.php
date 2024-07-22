<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use DateTime;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'First Post Ever',
            'body' => 'Have you posted shit online before?',
            'user_id' => 1,
            'created_at' => DateTime::createFromFormat('Y-m-d', '2024-06-15')
        ]);

        DB::table('posts')->insert([
            'title' => 'A way out',
            'body' => 'Enjoy new quest room with me this Friday. Gathering near Laima watch',
            'user_id' => 2,
            'created_at' => DateTime::createFromFormat('Y-m-d', '2024-07-03')
        ]);

        DB::table('posts')->insert([
            'title' => 'Dissapointed',
            'body' => 'Nobody came to meet me at Laima watch :( . Why would you do that?',
            'user_id' => 2,
            'created_at' => DateTime::createFromFormat('Y-m-d', '2024-07-04')
        ]);

        DB::table('posts')->insert([
            'title' => 'Kittens',
            'body' => 'Doesanyone is interested in having a baby kitten at home? My lovely cat provided us with four beautiful black cats. Who wants one for free?',
            'user_id' => 3,
            'created_at' => DateTime::createFromFormat('Y-m-d', '2024-05-01')
        ]);
    }
}
