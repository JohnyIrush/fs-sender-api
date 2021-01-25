<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class AgentLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agent_locations')->truncate();

        DB::table('agent_locations')->insert([
            'agent_list_id' => 1,
            'name' => 'NewLands',
            'code' => 'CA',
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
