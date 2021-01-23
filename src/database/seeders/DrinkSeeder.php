<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drinks')->truncate();

        DB::table('drinks')->insert([
              'type' => 'Märzen Lager Kebfest',
             'category' => 2,
             'image' => '/sendfoodassests/Items/Märzen Lager.jpg',     
             'comment' => '3 for 10.00 CAD',        
             'price' => 3.50,
             'productcategory' => 3,
             'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('drinks')->insert([
            'type' => 'Premium Lager Kimfest',
           'category' => 2,
           'image' => '/sendfoodassests/wine/Premium Larager Kimfest.jpg',     
           'comment' => '3 for 8.00 CAD',        
           'price' => 3.0,
           'productcategory' => 3,
           'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('drinks')->insert([
        'type' => 'Bergsig Icarus White Blend',
       'category' => 1,
       'image' => '/sendfoodassests/beer/.jpg',     
       'comment' => '3 for 30.00 CAD',        
       'price' => 10.0,
       'productcategory' => 3,
       'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('drinks')->insert([
        'type' => 'Merlot ',
       'category' => 1,
       'image' => '/sendfoodassests/beer/IMG-20210121.jpg',     
       'comment' => '3 for 30.00 CAD',        
       'price' => 12.00,
       'productcategory' => 3,
       'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('drinks')->insert([
        'type' => 'Carbenet',
       'category' => 2,
       'image' => '/sendfoodassests/beer/.jpg',     
       'comment' => '3 for 30.00 CAD',        
       'price' => 12.00,
       'productcategory' => 3,
       'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);



      DB::table('drinks')->insert([
        'type' => 'water',
       'category' => 4,
       'image' => '/sendfoodassests/water/IMG-20210122-WA0006.jpg',     
       'comment' => '12x500',        
       'price' => 5,
       'productcategory' => 3,
       'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('drinks')->insert([
        'type' => 'Skulder Black Pepper & Fig',
       'category' => 3,
       'image' => '/sendfoodassests/gin/Skulder.jpg',     
       'comment' => '3 for 100.00 CAD',        
       'price' => 35,
       'productcategory' => 3,
       'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('drinks')->insert([
        'type' => 'Dapper – Chocolate & Strawberry',
       'category' => 3,
       'image' => '/sendfoodassests/gin/Drupper.jpg',     
       'comment' => '3 for 100.00 CAD',        
       'price' => 35,
       'productcategory' => 3,
       'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
