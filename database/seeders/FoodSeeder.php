<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foods = [
            // Chinese
                // Rice
                ['name' => 'Chicken Fried Rice'],
                ['name' => 'Egg Fried Rice'],
                
                // Chicken
                ['name' => 'Chicken Stir Fry'],
                
                // Beef
                ['name' => 'Black Bean Beef'],
            
            // Italian
                // Pizza
                ['name' => 'Four Seasons'],
                
                // Pasta
                ['name' => 'Pepperoni'],
            
            // Indian
                // Curry
                ['name' => 'Balti'],
                ['name' => 'Madras'],
                ['name' => 'Korma'],
        ];

        foreach($foods as $food){
            Food::insert($food);
        }
    }
}
