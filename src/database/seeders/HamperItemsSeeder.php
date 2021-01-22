<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;


class HamperItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hamper_items')->truncate();
        DB::table('hamper_items')->insert([
             'item' => '
             4kg Sugar,
             2L Oil,
             2kg Washing Powder,
             1x Camphor Cream,
             2kg Flour,
             1x Green Soap Bar,
             1x Toothpaste,
             2x Bathing Soap (Pearl),
             1x Box Tea (Stella),
             1x Jam,
             1kg Salt,
             10x Toilet Paper Rolls,
             5kg Mealie -Meal,
             1x Dishwasher,
             3x Usavi Mix,
             1x 2kg Mariana Rice,
             2x 400g Bella Spaghetti,
             2x 410g Koo Baked Beans,
             1x Sugar Beans,
             1x Lucky Pilchards,
             ',       
             'hamper' => 1,
             'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('hamper_items')->insert([
            'item' => '
            4kg Sugar,
            2L Oil,
            2kg Washing Powder,
            1x Camphor Cream,
            2kg Flour,
            1x Green Soap Bar,
            1x Toothpaste,
            2x Bathing Soap (Pearl),
            1x Box Tea (Stella),
            1x Jam,
            1kg Salt,
            10x Toilet Paper Rolls,
            5kg Mealie -Meal,
            1x Dishwasher,
            3x Usavi Mix,
            1x 2kg Mariana Rice,
            2x 400g Bella Spaghetti,
            2x 410g Koo Baked Beans,
            1x Sugar Beans,
            1x Lucky Pilchards,
            ',       
            'hamper' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);
       DB::table('hamper_items')->insert([
        'item' => '
        4 x2l Cooking Oil,
        2x2Kg Flour,
        1x1Kg Salt,
        2x2Kg Rice,
        2x2Kg Sugar,
        2x Ricoffy 100g,
        Tea 5 roses 100 tea bags,
        Jam hugo 900gms,
        3x Korr Mix,
        1×12.5Kg Mealie meal,
        4x Spaghetti 400g,
        2x Macaroni 3kg,
        4x Sugar beans 500g,
        5x Baked beans,
        1x Kellogs Cornflakes,
        1 x Kellogs Rice Krispies,
        1x2ltr Oros,
        1x Sunlight Dishwashing Liquid,
        1x Handy Andy,
        9 x Toilet Paper Rolls baby soft 2 ply,
        1 xToothpaste Aqaufresh,
        1 xVaseline 250g,
        2x Bathing Soap (LUX),
        1x2Kg Washing Powder Sunlight liquid 2in1,
        2x Sunlight Green Bar 400g,
        1 x Candles,
        1 x Assorted Bakers Biscuits 1 kg,
        ',       
        'hamper' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
   ]);

   DB::table('hamper_items')->insert([
    'item' => '
    2x 2kg Sugar,
    1x Oros Orange Juice 2litrex,
    1x Oros Orange Juice 2litre,
    3x 2L Oil,
    1x 2kg Flour,
    1x Jam,
    1x Peanut Butter,
    1x ALL gold Tomato Sauce,
    1x 250g 5 Roses Tea,
    1x 12.5kg Mealie Meal,
    2x 2kg Rice,
    3x 400g Spaghetti Bella,
    2x Macaroni (Fatties & Monis),
    3x Knorr,
    1x 1kg Salt,
    1x 100ml Toothpaste,
    1x 2kg Maq Washing Powder,
    2x Bath Soap (Pearl),
    2 x Tinned Beans,
    2 x Lucky Star Philchards 155g,
    1x Texan Beef,
    2 ply 4 rolls Baby soft toilet paper,
    750ML Sunlight Liquid,
    400G sunlight green bar,
    ',       
    'hamper' => 4,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]);

DB::table('hamper_items')->insert([
    'item' => '
    5 Plastic Covers,
    5 Counter Books,
    10 x A4 Exercise Books,
    5 Pencils,
    5 Khaki Covers,
    2 Rules,
    2 Rubbers,
    1 Sharpener,
    1 Cello Tape,
    1 Pritt Glue,
    5 Black Pens,
    5 Blue Pens,
    ',       
    'hamper' => 5,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]);

DB::table('hamper_items')->insert([
    'item' => '
    8 x 2.5kg snowflake self raising flour,
    5 × 5kg brown sugar,
    4 × 5kg spekko rice,
    12 × 2 litres cooking oil,
    24 x 1kg green bar soap,
    24 × 150g palmolive soap,
    12 × 100ml colgate,
    4 × 3kg fattis and monis macaroni,
    2 × 5litres oros,
    24 × 400g lucky star fish,
    2 packets candles,
    10 boxes matches,
    1 × 48s snowsoft tissue,
    2 × 160s freshpak rooibos,
    4 × 1kg cerebos salt,
    1 × 5kg sunlight hand washing powder,
    6 × 450ml vaseline,
    6 × 400ml clere lotion,
    12 × 300g corned beef,
    ',       
    'hamper' => 6,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]);

DB::table('hamper_items')->insert([
    'item' => '
    1x 2.5kg self raising flour,
    2x 5kg Sekko rice,
    7x2litres cooking oil,
    7X 2kg sugar beans,
    5 x 500g sunlight bars,
    5x 2kg sugar,
    7x Palmolive soap,
    6 x 100ml colgate,
    2x 3kg macaroni,
    24 x2ply tissue,
    2x 5kg sugar,
    Pack of soya mince soup/ vegetable soup,
    12 baked beans,
    4x mixed vegetable tins,
    160 pack roibos,
    1kg salt,
    3kg sunlight washing powder,
    4x 2litre oros or squash,
    5x 1kg cremora,
    1 sack potatoes,
    ',       
    'hamper' => 7,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]);

DB::table('hamper_items')->insert([
    'item' => '
    5 × 2 litres cooking oil,
    4 × 2.5kg snowflake self raising flour,
    5 × 2kg tastic rice,
    1 x 3kg macaroni,
    2 × 5kg brown sugar,
    1 × 5kg sugar beans,
    1 x 7kg potatoes,
    80s freshpak rooibos tea bags,
    box soup,
    1kg salt,
    1 x 750ml mayonnaise,
    1 x 700ml Wellington tomato sauce,
    2 × 2 litres oros,
    6 × 400g lucky star fish,
    1 x 18s babysoft,
    1 × 3kg sunlight hand washing powder,
    4 × 500g sunlight laundry bar,
    4 × 150g palmolive soap/savlon soap,
    3 × 100ml colgate,
    1 packet candles,
    10 boxes matches,
    ',       
    'hamper' => 8,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]);

DB::table('hamper_items')->insert([
    'item' => '
    1x 2L cooking oil,
    1x 2kg sugar,
    1x 2kg flour,
    1x 2kg rice,
    1x 1 kg salt,
    1x 5kg hupfu,
    1x 500g vaseline,
    1x bath soap,
    1x bar soap,
    1x box teabags,
    1x cartoon candles,
    1x carton matches,
    ',       
    'hamper' => 9,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]);

DB::table('hamper_items')->insert([
    'item' => '
    2x 5L cooking oil,
    1x 10kg sugar,
    1x 2kg flour,
    1x 2kg rice,
    1x 2kg salt,
    1x 12.5kg hupfu,
    1x 500g vaseline,
    2x bar soaps,
    2x bath soaps,
    1x box teabags,
    2x cartoon candles,
    2x carton matches,
    1x 250g margarine,
    2x 2L coke or 32x2L mazowe,
    3 cans beef,
    3 cans beans,
    3 cans star sardines,
    2x spaghetti,
    2x macaroni,
    2x 100ml toothpaste,
    5x toilet paper,
    2x 750g mayonnaise,
    2x 500g dried sugar beans,
    1x 2k washing powder,
    1x crate of eggs,
    1x jam,
    2x rooibos,
    1x ricoff,
    2x cremora,
    2x clere,
    1x tomato sauce,
    2x soup,
    1x peanut butter,
    1x dishwasher,
    1x camphor,
    10 maxi pads,
    
    ',       
    'hamper' => 10,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]);

DB::table('hamper_items')->insert([
    'item' => '
    1x 2L cooking oil,
    1x 5kg sugar,
    1x 2kg flour,
    1x 2kg rice,
    1x 2kg salt,
    1x 10kg hupfu,
    1x 500g vaseline,
    2x bar soaps,
    2x bath soaps,
    1x box teabags,
    1x cartoon candles,
    1x carton matches,
     1x 250g margarine,
     2x 2L coke or 2x2L mazowe,
     2 cans beef,
     2 cans beans,
     2 cans star sardines,
     1x spaghetti,
     1x macaroni,
     1x 100ml toothpaste,
     5x toilet paper,
     1x 750g mayonnaise,
     1x 500g dried sugar beans,
    ',       
    'hamper' => 11,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]);


    }

}
