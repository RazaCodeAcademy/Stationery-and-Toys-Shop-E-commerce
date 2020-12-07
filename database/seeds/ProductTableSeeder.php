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
            'imagePath' => 'images/toys/image-1.jfif',
            'title' => 'Baby Saloon Kit',
            'description' => 'Super cool at least as a child toy',
            'price' => '100',
        ]);

        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/toys/image-2.jpg',
            'title' => 'Electric Motor Car',
            'description' => 'Super cool at least as a child toy',
            'price' => '100',
        ]);

        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/toys/image-3.jpg',
            'title' => 'Baby Duck',
            'description' => 'Super cool at least as a child toy',
            'price' => '100',
        ]);

        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/toys/image-4.jpg',
            'title' => 'Mototr Car Robot',
            'description' => 'Super cool at least as a child toy',
            'price' => '100',
        ]);

        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/toys/image-1.jfif',
            'title' => 'Baby Saloon Kit',
            'description' => 'Super cool at least as a child toy',
            'price' => '100',
        ]);

        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/toys/image-2.jpg',
            'title' => 'Electric Motor Car',
            'description' => 'Super cool at least as a child toy',
            'price' => '100',
        ]);

        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/toys/image-3.jpg',
            'title' => 'Baby Duck',
            'description' => 'Super cool at least as a child toy',
            'price' => '100',
        ]);

        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/toys/image-4.jpg',
            'title' => 'Mototr Car Robot',
            'description' => 'Super cool at least as a child toy',
            'price' => '100',
        ]);

        $product->save();

    }
}
