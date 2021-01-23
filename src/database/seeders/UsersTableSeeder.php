<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->truncate();
         
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' =>  Hash::make('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s') 
        ]);

        DB::table('users')->insert([
            'name' => 'Author User',
            'email' => 'author@author.com',
            'password' =>  Hash::make('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s') 
        ]);
         
        DB::table('users')->insert([
            'name' => 'Generic User',
            'email' => 'user@user.com',
            'password' =>  Hash::make('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s') 
        ]);


    }
}
