@extends('app')
  
@section('content')
        <h1>
            {{$questions->round->name}}
            {{$questions->examination->name}} 
            問{{$questions->number}}
        </h1>
        {!! Form::open(['action' => ['QuestionController@update', $questions->id], 'method' => 'put']) !!}
          {{ csrf_field() }}
          <div class="form-group">
              <label>問題文</label>
              {!! Form::textarea('body', $questions->body, ['required', 'class' => 'form-control']) !!}
          </div>
          <div class="form-group">
              <label>ア</label>
              {!! Form::input('text', 'choices[]', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
              <label>イ</label>
              {!! Form::input('text', 'choices[]', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
              <label>ウ</label>
              {!! Form::input('text', 'choices[]', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
              <label>エ</label>
              {!! Form::input('text', 'choices[]', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
              <label>正解</label>
              {!! Form::input('text', 'correct_flag', null, ['required', 'class' => 'form-control']) !!}
          </div>          
          <div class="form-group">
              <label>解説</label>
              {!! Form::textarea('commentary', $questions->commentary, ['required', 'class' => 'form-control']) !!}
          </div>
          <div class="form-group">
              <label>小項目</label>
              {!! Form::input('text', 'firstcategory_id', $questions->firstcategory_id, ['required', 'class' => 'form-control']) !!}
          </div>
          <div class="form-group">
              <label>種別</label>
              {!! Form::input('text', 'divition_id', $questions->divition_id, ['required', 'class' => 'form-control']) !!}
          </div>
          <button type="submit" class="btn btn-default">編集</button>
        {!! Form::close() !!}        
 @endsection
