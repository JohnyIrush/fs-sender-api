<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class AgentListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agent_lists')->truncate();

        DB::table('agent_lists')->insert([
            'name' => 'Kebab Enterprise',
            'email' => 'email@email.com',
            'mobile_number' => '+263779500500',
            'code' => '1',
            'country_code' => 'CA',
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
