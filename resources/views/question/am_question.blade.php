@extends('app')

@section('header')
    <div class="col-md-4">
        <div class="header_left">
            @if ((int)$questions->number > 1)
                <a href="
                     {{ action(
                         'QuestionController@am_question'
                       , [
                               'examination_id' => $questions->examination_id
                             , 'round_id'       => $questions->round_id
                             , 'number'         => (int)$questions->number-1
                         ]
                     )
                     }}"
                >前の問題</a>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="header_center"></div>
    </div>
    <div class="col-md-4">
        <div class="header_right">
            @if ((int)$am_question_last_number > (int)$questions->number)
                <a href="
                     {{ action(
                         'QuestionController@am_question'
                       , [
                               'examination_id' => $questions->examination_id
                             , 'round_id'       => $questions->round_id
                             , 'number'         => (int)$questions->number+1
                         ]
                     )
                     }}"
                >次の問題</a>
            @endif
        </div>
    </div>
@endsection

@section('content')
    <h1>
        {{$questions->round->name}}
        {{$questions->examination->name}} 
        問{{$questions->number}}
    </h1>
    <div>
        {!! $questions->body !!}
    </div>
    <ul>
        <li>@if ($choices[0]['body']) ア：{!! $choices[0]['body'] !!} @endif</li>
        <li>@if ($choices[1]['body']) イ：{!! $choices[1]['body'] !!} @endif</li>
        <li>@if ($choices[2]['body']) ウ：{!! $choices[2]['body'] !!} @endif</li>
        <li>@if ($choices[3]['body']) エ：{!! $choices[3]['body'] !!} @endif</li>
    </ul>
    <p>
        {{$questions->firstcategory->secondcategory->thirdcategory->topcategory->name}}&nbsp;/
        {{$questions->firstcategory->secondcategory->thirdcategory->name}}&nbsp;/
        {{$questions->firstcategory->secondcategory->name}}&nbsp;/
        {{$questions->firstcategory->name}}
    </p>
    <div class="answer_box">
        <label for="answer">正解と解説をみる</label>
        <input type="checkbox" id="answer"/>
        <div class="answer">
            <p>
                正解&nbsp;
                @if ((int)$choices[0]['correct_flag'] === 1)
                    ア
                @elseif ((int)$choices[1]['correct_flag'] === 1)
                    イ
                @elseif ((int)$choices[2]['correct_flag'] === 1)
                    ウ
                @elseif ((int)$choices[3]['correct_flag'] === 1)
                    エ
                @endif
            </p>
            <div>
                {!! $questions->commentary !!}
            </div>
        </div>
    </div>
    <div>
        <h2>{{$questions->round->name}}&nbsp;{{$questions->examination->name}}&nbsp;午前問題一覧</h2>
        <table>
            <body>
                @foreach ($am_question_lists as $am_question_list)
                    <tr>
                        <td>
                            <a href="
                               {{ action(
                                     'QuestionController@am_question'
                                   , [
                                         'examination_id' => $questions->examination_id
                                       , 'round_id'       => $questions->round_id
                                       , 'number'         => $am_question_list['number']
                                   ]
                                  )
                               }}"
                            >問{{ $am_question_list->number }}</a>       
                        </td>
                        <td>{{ $am_question_list->firstcategory->name }}</td>
                        <td>{{ $am_question_list->firstcategory->secondcategory->name }}</td>
                        <td>{{ $am_question_list->firstcategory->secondcategory->thirdcategory->name }}</td>
                        <td>{{ $am_question_list->firstcategory->secondcategory->thirdcategory->topcategory->name }}</td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    <div>
        <h2>{{$questions->round->name}}&nbsp;{{$questions->examination->name}}&nbsp;午後問題一覧</h2>
        <table>
            <body>
                @foreach ($pm_question_lists as $pm_question_list)
                    <tr>
                        <td>
                            <a href="
                               {{ action(
                                     'QuestionController@pm_question'
                                   , [
                                         'examination_id' => $questions->examination_id
                                       , 'round_id'       => $questions->round_id
                                       , 'number'         => $pm_question_list['number']
                                   ]
                                  )
                               }}"
                            >問{{ $pm_question_list->number }}</a>       
                        </td>
                        <td>{{ $pm_question_list->thirdcategory->name }}</td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    <div>
        <h2>{{$questions->examination->name}}&nbsp;一覧</h2>
        <table>
            <body>
                @foreach ($rounds as $round)
                    <tr>
                        <td>
                            <a href="
                               {{ action(
                                     'QuestionController@am_question'
                                   , [
                                         'examination_id' => $questions->examination_id
                                       , 'round_id'       => $round->id
                                       , 'number'         => 1
                                   ]
                                  )
                               }}"
                            >{{$questions->examination->name}}&nbsp;{{ $round->name }}</a>       
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
@endsection
