<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    	$categories = [
    		['name' => 'Development'],
    		['name' => 'Design'],
    		['name' => 'Geek'],
    		['name' => 'Travel'],
    		['name' => 'Art'],
    		['name' => 'Sci Fi']
    	];
    	DB::table('categories')->insert($categories);
    }
}
