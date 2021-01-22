<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class DrinkCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_categories')->truncate();

        DB::table('drink_categories')->insert([
             'category' => 'Wine',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


       DB::table('drink_categories')->insert([
        'category' => 'Beer',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
   ]);

      DB::table('drink_categories')->insert([
       'category' => 'Gin',
       'created_at' => Carbon::now()->format('Y-m-d H:i:s')
   ]);
   
   DB::table('drink_categories')->insert([
    'category' => 'Water',
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]);

    }
}
