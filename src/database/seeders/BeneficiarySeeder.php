<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class BeneficiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beneficiaries')->truncate();

        DB::table('beneficiaries')->insert([
            'user_id' => 1,
            'name' => 'Johny',
            'address' => 'Nai',
            'city' => 'Nai',
            'state' => 'Kenya',
            'postal_code' => '00100',
            'country' => '',
            'bank_name' => 'bbank',
            'branch_name' => 'branch 1',
            'account_number' => '1',
            'email' => 'j@gmail.com',
            'phone' => '0748607169',
            'created_by' => 1,
            'active' => 1,
            'updated_by' =>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beneficiaries')->insert([
            'user_id' => 1,
            'name' => 'Dev',
            'address' => 'Nai',
            'city' => 'Nai',
            'state' => 'Canada',
            'postal_code' => '00100',
            'country' => 'Kenya',
            'bank_name' => 'bbank',
            'branch_name' => 'branch 1',
            'account_number' => '1',
            'email' => 'admin@gmail.com',
            'phone' => '0748607169',
            'created_by' => 1,
            'active' => 1,
            'updated_by' =>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beneficiaries')->insert([
            'user_id' => 1,
            'name' => 'Jani',
            'address' => 'Nai',
            'city' => 'Nai',
            'state' => 'Kenya',
            'postal_code' => '00100',
            'country' => 'Kenya',
            'bank_name' => 'bbank bankers',
            'branch_name' => 'branch 2',
            'account_number' => '1',
            'email' => 'engineer@gmail.com',
            'phone' => '074134678',
            'created_by' => 1,
            'active' => 1,
            'updated_by' =>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('beneficiaries')->insert([
            'user_id' => 1,
            'name' => 'Oscars',
            'address' => 'West',
            'city' => 'Nai',
            'state' => 'Kenya',
            'postal_code' => '00100',
            'country' => 'Kenya',
            'bank_name' => 'bbanka',
            'branch_name' => 'branch 3',
            'account_number' => '3',
            'email' => 'Os@gmail.com',
            'phone' => '07000000',
            'created_by' => 1,
            'active' => 1,
            'updated_by' =>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
