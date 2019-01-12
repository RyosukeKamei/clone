<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keyword;
use App\FirstcategoryToKeyword;
use App\Question;

class KeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * キーワード登録
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    /**
     * キーワードと小項目を関連付け
     * 問題文を基にする
     */
    public function relation()
    {
    	$keywords = \App\Keyword::all();
    	
    	foreach($keywords as $keyword)
    	{
    		$question = \App\Question
    		    ::where('body', 'LIKE', '%'.$keyword->keyword.'%')
    		    ->first();
    		if(isset($question->firstcategory_id))
    		{
    			$firstcategory_to_keyword = \App\FirstcategoryToKeyword::create([
    					  'firstcategory_id' => $question->firstcategory_id
    					, 'keyword_id' => $keyword->id
    			]);        		
    		}
    	}
    }
}
