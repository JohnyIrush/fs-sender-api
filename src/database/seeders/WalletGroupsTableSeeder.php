<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class WalletGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wallet_groups')->truncate();
         
        DB::table('wallet_groups')->insert([
            'identifier'  => 'ZIPCO',
            'currency'    => 'USD',
            'title'       => 'ZIPCO Wallet',
            'color'       => 'lite-green',
            'description' => 'ZIPCO Wallet',
            'created_by'  => 1,
            'updated_by'  => 1,
        ]);

        DB::table('wallet_groups')->insert([
            'identifier'  => 'USD',
            'currency'    => 'USD',
            'title'       => 'USD Wallet',
            'color'       => 'blue',
            'description' => 'USD Wallet',
            'created_by'  => 1,
            'updated_by'  => 1,
        ]);

        DB::table('wallet_groups')->insert([
            'identifier'  => 'CAD',
            'currency'    => 'CAD',
            'title'       => 'CAD Wallet',
            'color'       => 'pink',
            'description' => 'CAD Wallet',
            'created_by'  => 1,
            'updated_by'  => 1,
        ]);

        DB::table('wallet_groups')->insert([
            'identifier'  => 'EUR',
            'currency'    => 'EUR',
            'title'       => 'EUR Wallet',
            'color'       => 'green',
            'description' => 'EUR Wallet',
            'created_by'  => 1,
            'updated_by'  => 1,
        ]);

        DB::table('wallet_groups')->insert([
            'identifier'  => 'GBP',
            'currency'    => 'GBP',
            'title'       => 'GBP Wallet',
            'color'       => 'yellow',
            'description' => 'GBP Wallet',
            'created_by'  => 1,
            'updated_by'  => 1,
        ]);
    }
}
