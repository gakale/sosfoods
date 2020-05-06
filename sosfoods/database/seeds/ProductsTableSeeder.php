<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 30; $i++) { 
            # code...
        
        Product::create([
            'title'=> $faker->sentence(3),
            'slug'=> $faker->slug(),
            'subtitle'=> $faker->sentence(3),
            'description'=> $faker->text(),
            'price'=> $faker->numberBetween(25 , 600)*100,
            'image'=> 'https://via.placeholder.com/1000x800',
        ]);
        }
    }

}
