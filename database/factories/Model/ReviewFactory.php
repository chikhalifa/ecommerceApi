<?php

namespace Database\Factories\Model;
//namespace App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=>function(){
                return \App\Models\Model\Product::all()->random();
            },
            'customer'=>$this->faker->name(),
            'review'=>$this->faker->paragraph(),
            'star'=>$this->faker->numberBetween(0,5)

            
        ];

    }
    
}
