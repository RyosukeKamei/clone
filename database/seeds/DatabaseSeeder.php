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
    	$this->call([
    			ExaminationsTableSeeder::class,
    			DivitionsTableSeeder::class,
    			TopcategoriesTableSeeder::class,
    			ThirdcategoriesTableSeeder::class,
    			SecondcategoriesTableSeeder::class,
    			FirstcategoriesTableSeeder::class,
    			RoundsTableSeeder::class,
    			QuestionsTableSeeder::class,
    	]);        
    }
}
