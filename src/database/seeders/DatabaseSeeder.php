<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            HamperSeeder::class,
            ItemSeeder::class,
            DrinkSeeder::class,
            DrinkCategorySeeder::class,
            HamperItemsSeeder::class,
            HamperImagesSeeder::class,
            ProductCategorySeeder::class,
            BeneficiarySeeder::class,
            UsersTableSeeder::class,
            CountriesTableSeeder::class,
            BankListSeeder::class,
            CitiesTableSeeder::class,
            StatesTableSeeder::class,
            AgentListSeeder::class,
            AgentLocationSeeder::class,
            ConfigurationsTableSeeder::class,
            MobileWalletTemplatesTableSeeder::class
            ]);
    }
}
