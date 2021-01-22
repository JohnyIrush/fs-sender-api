<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;


class HamperImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hamper_images')->truncate();
         //Hamper id 1 NDAGUTA HAMPER
        DB::table('hamper_images')->insert([
             'image' => '/sendfoodassests/Existing Hampers/4.png',
             'hamper' => 1,
             'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 
        DB::table('hamper_images')->insert([
            'image' => '/sendfoodassests/Existing Hampers/2.png',
            'hamper' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 

       DB::table('hamper_images')->insert([
        'image' => '/sendfoodassests/Existing Hampers/1.png',
        'hamper' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
   ]); 

   DB::table('hamper_images')->insert([
    'image' => '/sendfoodassests/Existing Hampers/3.png',
    'hamper' => 1,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]); 

DB::table('hamper_images')->insert([
    'image' => '/sendfoodassests/Existing Hampers/3.png',
    'hamper' => 1,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]); 
        //Hamper id 1 NDAGUTA HAMPER

         //Hamper id 2 SHORTY HAMPER
         DB::table('hamper_images')->insert([
            'image' => '/sendfoodassests/Existing Hampers/5.png',
            'hamper' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 
       DB::table('hamper_images')->insert([
           'image' => '/sendfoodassests/Existing Hampers/10.png',
           'hamper' => 2,
           'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      DB::table('hamper_images')->insert([
       'image' => '/sendfoodassests/Existing Hampers/22.png',
       'hamper' => 2,
       'created_at' => Carbon::now()->format('Y-m-d H:i:s')
  ]); 

  DB::table('hamper_images')->insert([
   'image' => '/sendfoodassests/Existing Hampers/16.png',
   'hamper' => 2,
   'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]); 

       //Hamper id 2 SHORTY HAMPER

         //Hamper id 3 NDAKABEREKA HAMPER
         DB::table('hamper_images')->insert([
            'image' => '/sendfoodassests/Existing Hampers/11.png',
            'hamper' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 
       DB::table('hamper_images')->insert([
           'image' => '/sendfoodassests/Existing Hampers/23.png',
           'hamper' => 3,
           'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      DB::table('hamper_images')->insert([
       'image' => '/sendfoodassests/Existing Hampers/22.png',
       'hamper' => 3,
       'created_at' => Carbon::now()->format('Y-m-d H:i:s')
  ]); 

  DB::table('hamper_images')->insert([
   'image' => '/sendfoodassests/Existing Hampers/17.png',
   'hamper' => 3,
   'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]); 

       //Hamper id 3 NDAKABEREKA HAMPER

         //Hamper id 4 PAMWEDZI HAMPER
         DB::table('hamper_images')->insert([
            'image' => '/sendfoodassests/Existing Hampers/6.png',
            'hamper' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 
       //Hamper id 4 PAMWEDZI HAMPER

         //Hamper id 5 CHIKORO HAMPER
         DB::table('hamper_images')->insert([
            'image' => '/sendfoodassests/Existing Hampers/12.png',
            'hamper' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 
       DB::table('hamper_images')->insert([
           'image' => '/sendfoodassests/Existing Hampers/18.png',
           'hamper' => 5,
           'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      DB::table('hamper_images')->insert([
       'image' => '/sendfoodassests/Existing Hampers/24.png',
       'hamper' => 5,
       'created_at' => Carbon::now()->format('Y-m-d H:i:s')
  ]); 

  DB::table('hamper_images')->insert([
   'image' => '/sendfoodassests/Existing Hampers/7.png',
   'hamper' => 5,
   'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]); 

       //Hamper id 5 CHIKORO HAMPER


         //Hamper id 6 WANDIGONA HAMPER
         DB::table('hamper_images')->insert([
            'image' => '/sendfoodassests/Existing Hampers/19.png',
            'hamper' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 
       DB::table('hamper_images')->insert([
           'image' => '/sendfoodassests/Existing Hampers/13.png',
           'hamper' => 6,
           'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 
       //Hamper id 6 WANDIGONA HAMPER

         //Hamper id 7 VEGAN HAMPER
         DB::table('hamper_images')->insert([
            'image' => '/sendfoodassests/Existing Hampers/20.png',
            'hamper' => 7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 
       DB::table('hamper_images')->insert([
           'image' => '/sendfoodassests/Existing Hampers/8.png',
           'hamper' => 7,
           'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      DB::table('hamper_images')->insert([
        'image' => '/sendfoodassests/Existing Hampers/14.png',
        'hamper' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
   ]); 
       //Hamper id 7 VEGAN HAMPER

         //Hamper id 8 MHURI HAMPER
         DB::table('hamper_images')->insert([
            'image' => '/sendfoodassests/Existing Hampers/15.png',
            'hamper' => 8,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 
       DB::table('hamper_images')->insert([
           'image' => '/sendfoodassests/Existing Hampers/25.png',
           'hamper' => 8,
           'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]); 

      DB::table('hamper_images')->insert([
        'image' => '/sendfoodassests/Existing Hampers/21.png',
        'hamper' => 8,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
   ]); 

   DB::table('hamper_images')->insert([
    'image' => '/sendfoodassests/Existing Hampers/9.png',
    'hamper' => 8,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]); 
  
       //Hamper id 8 MHURI HAMPER

    }
}
