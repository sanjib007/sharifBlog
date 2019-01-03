<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CountriesTableSeeder::class);
         $this->call(NewsCategoriesTableSeeder::class);
         $this->call(NewsCategoriesTableSeeder::class);
    }
}
