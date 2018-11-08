@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">ユーザー一覧</h3>
      </div>
      <div class="panel-body">
        <ul class="list-group">
          @foreach($users as $user)
          <li class="list-group-item">{{$user->name}}</li>
          @endforeach
        </ul>
      </div>
    </div>
@stop

