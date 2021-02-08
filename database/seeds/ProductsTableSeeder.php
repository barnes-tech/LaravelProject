<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
          'name' => 'Priceless Ming Vase',
          'slug' => 'ming-vase',
          'details' => 'Improve your Feng Shui',
          'price' => '149999',
          'stock' => '0',
          'description' => 'Improve the energy of your home with this priceless ming vase.'
        ]);
        Product::create([
          'name' => 'Grand Piano',
          'slug' => 'grand-piano',
          'details' => 'Good luck getting this thing through the door',
          'price' => '2499999',
          'stock' => '1',
          'description' => 'Your neighbours will think your a twat when it gets delivered but atleast it\'s to big to nick.'
        ]);
        Product::create([
          'name' => 'Industrial Anvil',
          'slug' => 'industrial-anvil',
          'details' => 'Start your sword smithing course on Udemy today!',
          'price' => '12499',
          'stock' => '1',
          'description' => 'Stub your toe on this and you\'ll know about it.' 
        ]);
    }
}
