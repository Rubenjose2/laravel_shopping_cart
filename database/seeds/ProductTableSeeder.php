<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath'=>'https://pimages.solidsignal.com/SL3T_zoom.jpg',
            'title'=>'Dish KA KU',
            'description'=>'Here is where the description of the products go',
            'price'=> 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath'=>'https://pimages.solidsignal.com/SL3T_zoom.jpg',
            'title'=>'Dish KA KU',
            'description'=>'Here is where the description of the products go',
            'price'=> 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://pimages.solidsignal.com/SL3T_zoom.jpg',
            'title'=>'Dish KA KU',
            'description'=>'Here is where the description of the products go',
            'price'=> 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://pimages.solidsignal.com/SL3T_zoom.jpg',
            'title'=>'Dish KA KU',
            'description'=>'Here is where the description of the products go',
            'price'=> 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://pimages.solidsignal.com/SL3T_zoom.jpg',
            'title'=>'Dish KA KU',
            'description'=>'Here is where the description of the products go',
            'price'=> 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://pimages.solidsignal.com/SL3T_zoom.jpg',
            'title'=>'Dish KA KU',
            'description'=>'Here is where the description of the products go',
            'price'=> 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://pimages.solidsignal.com/SL3T_zoom.jpg',
            'title'=>'Dish KA KU',
            'description'=>'Here is where the description of the products go',
            'price'=> 10
        ]);
        $product->save();
     }
}
