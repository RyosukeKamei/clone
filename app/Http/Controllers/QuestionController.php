<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Goutte\Client;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class QuestionController extends Controller
{

    /**
     * 午前問題
     *
     * @param int $examination_id
     *            試験
     * @param int $round_id
     *            実施
     * @param int $number
     *            問題
     * @return \Illuminate\Http\Response
     */
    public function am_question($examination_id, $round_id, $number)
    {
        // 問題文
        $questions = \App\Question::where('examination_id', $examination_id)->where('round_id', $round_id)
            ->where('number', $number)
            ->first();
        // 選択肢
        $choices = \App\Choice::where('question_id', $questions->id)->get();
        
        // 午前問題一覧
        $am_question_lists = \App\Question::where('examination_id', $examination_id)->where('round_id', $round_id)->get();
        
        // 午前問題の最後の番号（次の問題制御に使う）
        $am_question_last_number = $am_question_lists->last()->number;
        
        // 午後問題一覧
        $pm_question_lists = \App\AfterQuestion::where('examination_id', $examination_id)->where('round_id', $round_id)->orderby('number', 'asc')->get();
        
        // 試験ごと   
        $rounds = \App\Round::all();
        
        return view('question.am_question', compact('questions', 'choices', 'am_question_lists', 'am_question_last_number', 'pm_question_lists', 'rounds'));
    }

    /**
     * 午後問題表示
     *
     * @param integer $examination_id
     *            試験区分 3 基本情報, 4 応用情報
     * @param integer $round_id
     *            試験実施回
     * @param integer $number
     *            試験番号
     */
    public function pm_question($examination_id, $round_id, $number)
    {
    	// 問題文
    	$questions = \App\AfterQuestion::where('examination_id', $examination_id)->where('round_id', $round_id)
    	->where('number', $number)
    	->first();
    	
    	// 午前問題一覧
    	$am_question_lists = \App\Question::where('examination_id', $examination_id)->where('round_id', $round_id)->get();
    	
    	// 午後問題一覧
     	$pm_question_lists = \App\AfterQuestion::where('examination_id', $examination_id)->where('round_id', $round_id)->orderby('number', 'asc')->get();
     	
     	// 午後問題の最後の番号（次の問題制御に使う）
     	$pm_question_last_number = $pm_question_lists->last()->number;
    	
    	// 試験ごと
    	$rounds = \App\Round::all();
    	
    	return view('question.pm_question', compact('questions', 'am_question_lists', 'pm_question_lists', 'pm_question_last_number', 'rounds'));
    }

    /**
     * テンプレートを読み込んで、MT用の問題文を作成
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rounds = \App\Round::find(20); // 平成30年度秋
        
        $examinations = \App\Examination::find(4); // 3:基本情報 4:応用情報
        
        for ($i = 1; $i <= 80; $i ++) {
            // テンプレートは毎回読み込み
            $templates = Storage::get('mt_template.txt');
            
            // タイトル 平成27年度秋応用情報技術者試験午前過去問1
            $templates = mb_ereg_replace("【タイトル】", $rounds->name . ' ' . $examinations->name . ' 問' . $i, $templates);
            
            // 名称 3_30_Q1 examination_id round_id question_number
            $templates = mb_ereg_replace("【ファイル名】", $rounds->id . '_' . $examinations->id . '_' . $i, $templates);
            
            // 試験区分 応用情報技術者
            $templates = mb_ereg_replace("【試験区分】", $examinations->name, $templates);
            
            // 日付 その日 10/31/2015 06:00:00 PM
            $now = new Carbon(Carbon::now());
            $templates = mb_ereg_replace("【日付】", $now->__get('month') . '/' . $now->__get('day') . '/' . $now->__get('year') . ' 06:00:00 PM', $templates);
            
            // 問題文
            $questions = \App\Question::where('examination_id', $examinations->id)->where('round_id', $rounds->id)
                ->where('number', $i)
                ->first();
            
            $body = '<p>' . str_replace(array(
                "\r\n",
                "\r",
                "\n"
            ), '</p><p>', $questions->body) . '</p>';
            
            $templates = mb_ereg_replace("【問題】", $body, $templates);
            
            // 選択肢
            $choices = \App\Choice::where('question_id', $questions->id)->get();
            
            // ア
            $templates = mb_ereg_replace("【ア】", $choices[0]->body, $templates);
            
            // イ
            $templates = mb_ereg_replace("【イ】", $choices[1]->body, $templates);
            
            // ウ
            $templates = mb_ereg_replace("【ウ】", $choices[2]->body, $templates);
            
            // エ
            $templates = mb_ereg_replace("【エ】", $choices[3]->body, $templates);
            
            // 正解
            $answer = null;
            if ((int) $choices[0]->correct_flag === 1) {
                $answer = 'ア';
            } elseif ((int) $choices[1]->correct_flag === 1) {
                $answer = 'イ';
            } elseif ((int) $choices[2]->correct_flag === 1) {
                $answer = 'ウ';
            } elseif ((int) $choices[3]->correct_flag === 1) {
                $answer = 'エ';
            }
            $templates = mb_ereg_replace("【正解】", $answer, $templates);
            
            $templates = mb_ereg_replace("【試験回】", $rounds->name, $templates);
            $templates = mb_ereg_replace("【試験区分】", $examinations->name, $templates);
            
            $examination_short = '';
            if ((int) $examinations->id === 3) {
                $examination_short = 'fe';
            } elseif ((int) $examinations->id === 4) {
                $examination_short = 'ap';
            }
            $index = '';
            for ($j = 1; $j <= 80; $j ++) {
                $index = $index . '<li><a href="http://korejo' . $examination_short . '.info/' . $now->__get('year') . '/' . $now->__get('month') . '/' . $rounds->id . '-' . $examinations->id . '-' . $j . '.html">' . $rounds->name . ' ' . $examinations->name . ' 問' . $j . '</a></li>';
            }
            
            $templates = mb_ereg_replace("【目次】", $index, $templates);
            
            echo ($templates);
        }
    }

    /**
     * スクレイピングしてDB取り込み、可能な限り自動化
     * かなり雑な作り。リファクタリングが必要
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        for ($i = 1; $i <= 80; $i ++) {
            $id = 6120 + $i;
            $answer_id = 0;
            $firstcategory_id = 1;
            // 選択肢
            $get_choices = array();
            // 年度 固定
            $round_id = 20;
            // 試験区分
            $examination_id = 4; /* 4 応用 */
            
            $crawler = \Goutte::request('GET', 'https://www.ap-siken.com/kakomon/30_aki/q' . $i . '.html');
            // 問題文
            $get_question = $crawler->filter('div.main div')
                ->eq(2)
                ->each(function ($node, $question)
            {
                $get_question = str_replace("，", "、", strip_tags($node->html()));
                return $get_question;
            });
            if (isset($get_question) && isset($get_question[0])) {
                $get_question = $get_question[0];
            } else {
                $get_question = null;
            }
            // 選択肢 ア
            $select_a = $crawler->filter('div#select_a')
                ->eq(0)
                ->each(function ($node)
            {
                $select_a = str_replace("，", "、", strip_tags($node->html()));
                return $select_a;
            });
            if (isset($select_a) && isset($select_a[0])) {
                $get_choices[0] = $select_a[0];
            } else {
                $get_choices[0] = null;
            }
            // 選択肢 イ
            $select_b = $crawler->filter('div#select_i')
                ->eq(0)
                ->each(function ($node)
            {
                $select_b = str_replace("，", "、", strip_tags($node->html()));
                return $select_b;
            });
            if (isset($select_b) && isset($select_b[0])) {
                $get_choices[1] = $select_b[0];
            } else {
                $get_choices[1] = null;
            }
            // 選択肢 ウ
            $select_c = $crawler->filter('div#select_u')
                ->eq(0)
                ->each(function ($node)
            {
                $select_c = str_replace("，", "、", strip_tags($node->html()));
                return $select_c;
            });
            if (isset($select_c) && isset($select_c[0])) {
                $get_choices[2] = $select_c[0];
            } else {
                $get_choices[2] = null;
            }
            
            // 選択肢 エ
            $select_d = $crawler->filter('div#select_e')
                ->eq(0)
                ->each(function ($node)
            {
                $select_d = str_replace("，", "、", strip_tags($node->html()));
                return $select_d;
            });
            if (isset($select_d) && isset($select_d[0])) {
                $get_choices[3] = $select_d[0];
            } else {
                $get_choices[3] = null;
            }
            
            // 正解
            $answer_id = $crawler->filter('span#answerChar')
                ->eq(0)
                ->each(function ($node)
            {
                $answer_id = 0;
                $answer = str_replace("，", "、", strip_tags($node->html()));
                if ($answer === 'ア') {
                    $answer_id = 1;
                } elseif ($answer === 'イ') {
                    $answer_id = 2;
                } elseif ($answer === 'ウ') {
                    $answer_id = 3;
                } elseif ($answer === 'エ') {
                    $answer_id = 4;
                }
                return $answer_id;
            });
            if (isset($answer_id) && isset($answer_id[0])) {
                $answer_id = $answer_id[0];
            } else {
                $answer_id = null;
            }
            
            $questions = \App\Question::where('body', 'LIKE', '%' . mb_substr($get_question, 1, 10) . '%')->first();
            if (isset($questions->firstcategory_id)) {
                $firstcategory_id = $questions->firstcategory_id;
            }
            
            $question = \App\Question::find((int) $id);
            
            $question->body = $get_question;
            $question->commentary = '';
            $question->firstcategory_id = $firstcategory_id;
            $question->divition_id = 1;
            $question->save();
            
            $choices = \App\Choice::where('question_id', $id)->get();
            $count = 0;
            foreach ($choices as $choice) {
                $update_choice = \App\Choice::find($choice->id);
                $update_choice->body = $get_choices[$count];
                if ((int) $answer_id === (int) $choice->choice) {
                    $update_choice->correct_flag = 1;
                }
                $update_choice->save();
                $count ++;
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request            
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id            
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = \App\Question::find($id);
        
        return view('question.edit', compact('questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request            
     * @param int $id            
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = \App\Question::find($id);
        
        $question->body = $request->body;
        $question->commentary = $request->commentary;
        $question->firstcategory_id = $request->firstcategory_id;
        $question->divition_id = $request->divition_id;
        $question->save();
        
        $choices = \App\Choice::where('question_id', $id)->get();
        $count = 0;
        foreach ($choices as $choice) {
            $update_choice = \App\Choice::find($choice->id);
            $update_choice->body = $request->choices[$count];
            if ((int) $request->correct_flag === (int) $choice->choice) {
                $update_choice->correct_flag = 1;
            }
            $update_choice->save();
            $count ++;
        }
        $next_id = (int) $id + 1;
        return redirect('question/' . $next_id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id            
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 自分のウェブサイトから午後問題をスクレイピング
     *
     * @param integer $examination_id
     *            試験区分 3 基本情報, 4 応用情報
     * @param integer $round_id
     *            試験実施回
     */
    public function get_after_question($examination_id, $round_id)
    {
        $question_numbers = array(
            1 => 34,
            2 => 34,
            3 => 34
        );
        
        foreach ($question_numbers as $question_number => $thirdcategory_id) {
            
            $crawler = \Goutte::request('GET', 'http://korejosm.info/2016/09/SG2016h28SpringGogoQ' . $question_number . '-1.html');
            
            // 問題文
            $get_question = $crawler->filter('div.blog-body')
                ->eq(0)
                ->each(function ($node, $question)
            {
                $get_question = str_replace("，", "、", $node->html());
                return $get_question;
            });
            
            if (isset($get_question) && isset($get_question[0])) {
                $get_question = $get_question[0];
            } else {
                $get_question = null;
            }
            
            // データ投入
            $question = \App\AfterQuestion::create([
                'number' => $question_number,
                'body' => $get_question,
                'commentary' => '',
                'thirdcategory_id' => $thirdcategory_id,
                'divition_id' => 1,
                'round_id' => $round_id,
                'examination_id' => $examination_id
            ]);
        }
    }
}
