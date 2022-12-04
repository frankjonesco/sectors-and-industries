<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Chinese'],
            ['name' => 'Italian'],
            ['name' => 'Indian'],
        ];

        foreach($categories as $category){
            Category::insert($category);
        }
    }
}
