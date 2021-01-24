<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class BankListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank_lists')->truncate();

        DB::table('bank_lists')->insert([
            'name' => 'Equity',
            'code' => '1',
            'country_code' => 134,
            'status' => 1,
            'created_by' =>1,
            'updated_by' =>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('bank_lists')->insert([
            'name' => 'COPERATIVE',
            'code' => '1',
            'country_code' => 144,
            'status' => 1,
            'created_by' =>1,
            'updated_by' =>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('bank_lists')->insert([
            'name' => 'mastercard',
            'code' => '1',
            'country_code' => 155,
            'status' => 1,
            'created_by' =>1,
            'updated_by' =>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
