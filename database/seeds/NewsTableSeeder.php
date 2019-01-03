<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 243; $i++) {
            DB::table('news')->insert([
                'newsTitle' => $faker->unique()->country,
                'description' => $faker->unique()->country,
                'country_id' => $faker->unique()->country,
                'newsCategory_id' => $faker->unique()->country

            ]);
        }
    }
}
