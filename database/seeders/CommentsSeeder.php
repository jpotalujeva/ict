<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            'comment' => 'You are missing time when to meet you, moran',
            'post_id' => 2,
            'user_id' => 3
        ]);

         DB::table('comments')->insert([
            'comment' => 'Boys or Girls?',
            'post_id' => 4,
            'user_id' => 1
        ]);

          DB::table('comments')->insert([
            'comment' => 'Can I have one?',
            'post_id' => 4,
            'user_id' => 2
        ]);


         DB::table('comments')->insert([
            'comment' => 'We all been there :)',
            'post_id' => 1,
            'user_id' => 3
        ]);
    }
}
