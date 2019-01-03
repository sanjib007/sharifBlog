<?php

use Illuminate\Database\Seeder;

class NewsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = ['Sports', 'Weather','Local', 'International', 'Election', 'Entertentment', 'Economic', 'Kids', 'Jokes', 'Fation'];
        for ($i=0; $i < count($faker)-1; $i++) {
            DB::table('newsCategories')->insert([
                'newsType' => $faker[$i]
            ]);
        }
    }
}
