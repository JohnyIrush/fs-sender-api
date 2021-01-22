<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class HamperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hampers')->truncate();

        DB::table('hampers')->insert([
             'name' => 'NDAGUTA HAMPER',
             'comment' => 'Hampers',
             'price' => 150,
             'discount' => 12,
             'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        DB::table('hampers')->insert([
            'name' => 'SHORTY HAMPER',
            'comment' => 'Hampers, Basic',
            'price' => 67,
            'discount' => 10,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);  
       
      DB::table('hampers')->insert([
        'name' => 'NDAKABEREKA HAMPER',
        'comment' => 'Hampers, Luxury Goods',
        'price' => 228,
        'discount' => 30,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      DB::table('hampers')->insert([
        'name' => 'PAMWEDZI HAMPER',
        'comment' => 'Hampers, Luxury Goods',
        'price' => 160,
        'discount' => 14,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      DB::table('hampers')->insert([
        'name' => 'CHIKORO HAMPER',
        'comment' => 'Hampers, School',
        'price' => 65,
        'discount' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      DB::table('hampers')->insert([
        'name' => 'WANDIGONA HAMPER',
        'comment' => 'Bulk hamper',
        'price' => 500,
        'discount' => 50,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      DB::table('hampers')->insert([
        'name' => 'VEGAN HAMPER',
        'comment' => 'Bulk hamper',
        'price' => 220,
        'discount' => 25,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      DB::table('hampers')->insert([
        'name' => 'MHURI HAMPER',
        'comment' => 'Bulk hamper',
        'price' => 230,
        'discount' => 25,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      /* Latest Hampers */
      DB::table('hampers')->insert([
        'name' => 'Essential',
        'comment' => 'Hamper',
        'price' => 50,
        'discount' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      /* Latest Hampers */
      DB::table('hampers')->insert([
        'name' => 'Luxury',
        'comment' => 'Hamper',
        'price' => 175,
        'discount' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      /* Latest Hampers */
      DB::table('hampers')->insert([
        'name' => 'Standard',
        'comment' => 'Hamper',
        'price' => 100,
        'discount' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

  }
}
