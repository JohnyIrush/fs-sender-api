<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;


class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->truncate();

        DB::table('product_categories')->insert([
             'productcategory' => 'Hamper',             
        ]);

        DB::table('product_categories')->insert([
            'productcategory' => 'Items',             
       ]);

        DB::table('product_categories')->insert([
            'productcategory' => 'Drinks',             
       ]);
    }
}
