<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            // Chinese
            ['name' => 'Rice'],
            ['name' => 'Chicken'],
            ['name' => 'Beef'],

            // Italian
            ['name' => 'Pizza'],
            ['name' => 'Pasta'],

            // Indian
            ['name' => 'Curry'],
        ];

        foreach($subcategories as $subcategory){
            Subcategory::insert($subcategory);
        }
    }
}
