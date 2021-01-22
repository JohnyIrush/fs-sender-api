<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->truncate();

        DB::table('items')->insert([
             'description' => 'Sugar 5kg',
             'image' => '/sendfoodassets/Items/IMG-20210120-WA0000.jpg',             
             'price' => 10,
             'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('items')->insert([
            'description' => 'Margarine 500g',
            'image' => '/sendfoodassets/Items/IMG-20210120-WA0007.jpg',             
            'price' => 7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('items')->insert([
        'description' => 'Bath soap',
        'image' => '/sendfoodassets/Items/IMG-20210120-WA0003.jpg',             
        'price' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'Salt 1Kg ',
        'image' => '/sendfoodassets/Items/IMG-20210122-WA0021.jpg',             
        'price' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'Cooking Oil 2L',
        'image' => '/sendfoodassets/Items/Cooking Oil 2L.jpg',             
        'price' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'Sugar 10 KG ',
        'image' => '/sendfoodassets/Items/Sugar 10 KG .jpg',             
        'price' => 20,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'Bar soap',
        'image' => '/sendfoodassets/Items/IMG-20210122-WA0033.jpg',             
        'price' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'Raising flour 2.5Kg',
        'image' => '/sendfoodassets/Items/IMG-20210122-WA0004.jpg',             
        'price' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'Corned beef',
        'image' => '/sendfoodassets/Items/IMG-20210120-WA0002.jpg',             
        'price' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'M/Meal 12.5KG',
        'image' => '/sendfoodassets/Items/IMG-20210120-WA0001.jpg',             
        'price' => 15,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'Colgate',
        'image' => '/sendfoodassets/Items/IMG-20210122-WA0025.jpg',             
        'price' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'Rice 5Kg',
        'image' => '/sendfoodassets/Items/IMG-20210120-WA0009.jpg',             
        'price' => 13,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'Rice 10Kg',
        'image' => '/sendfoodassets/Items/IMG-20210122-WA0035.jpg',             
        'price' => 22,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'Rice 2Kg',
        'image' => '/sendfoodassets/Items/IMG-20210122-WA0034.jpg',             
        'price' => 8,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
        'description' => 'Mazowe 2L',
        'image' => '/sendfoodassets/Items/IMG-20210122-WA0027.jpg',             
        'price' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
