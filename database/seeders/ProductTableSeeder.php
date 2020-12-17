<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$products = [
    		[
    			'name' => "MEN'S BETTER THAN NAKED&trade; JACKET",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
                'quantite' => 21,
                'disponible' => 1,
                'vendeur_id'=> 1, 
                'price' => 200,
    			'image' => "http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png"
    		],
    		[
    			'name' => "WOMEN'S BETTER THAN NAKED&trade; JACKET",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
                'quantite' => 400,
                'disponible' => 1,
                'vendeur_id'=> 1,
    			'price' => 1600,
				// 'image' => "http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png"
				'image' => "C:\Users\lenovo\Desktop\tamba\bakeli\Portfolio\IMG\makeda.jpg"
    		],
    		[
    			'name' => "WOMEN'S SINGLE-TRACK SHOE",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
                'quantite' => 37,
                'disponible' => 1,
                'vendeur_id'=> 1,
                'price' => 378,
                
				// 'image' => "http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png"
				'image' => "C:\Users\lenovo\Desktop\tamba\bakeli\Portfolio\IMG\modern.jpg"
    		],
    		[
    			'name' => "Enduro Boa&reg; Hydration Pack",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
                'quantite' => 10,
                'disponible' => 1,
                'vendeur_id'=> 1,
    			'price' => 21,
				// 'image' => "http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/enduro-boa-hydration-pack-AJQZ_JK3_hero.png"
				'image' => "C:\Users\lenovo\Desktop\tamba\bakeli\Portfolio\IMG\Mad.jpg"
    		]
    	];

    	foreach ($products as $product) {
    		Product::create($product);
    	}

    }
}
