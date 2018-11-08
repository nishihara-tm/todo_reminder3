@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">タスクー一覧</h3>
      </div>
      <div class="panel-body">
        <ul class="list-group">
          @foreach($tasks as $task)
          <li class="list-group-item">{{$task->title}}</li>
          @endforeach
        </ul>
      </div>
    </div>
@stop

