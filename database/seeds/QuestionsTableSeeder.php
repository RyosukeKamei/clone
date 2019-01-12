<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $examinations = App\Examination::all();
    	$rounds = App\Round::all();
    	
    	foreach($examinations as $examination)
    	{
    		foreach($rounds as $round)
    		{
    			for($question_number = 1; $question_number <= (int)$examination->question_number; $question_number++)
    			{
    				$question_id = DB::table('questions')
    				    ->insertGetId([
    				          'number'           => $question_number
    				        , 'firstcategory_id' => 1
    				        , 'divition_id'      => 1
    				        , 'round_id'         => $round->id
    				        , 'examination_id'   => $examination->id
    				    ]);
    				
    				for($choice = 1; $choice <= 4; $choice++)
    				{
    					DB::table('choices')
    					    ->insert([
    					          'question_id'    => $question_id
    					        , 'choice'         => $choice
    					        , 'correct_flag'   => 0
    					    ]);
    				}
    			}
    		}
    	}
    }
}
