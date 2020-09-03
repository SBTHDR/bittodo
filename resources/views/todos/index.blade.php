@extends('todos.layout')

@section('title')
    All Todos
@endsection

@section('content')
    <h1 class="text-2xl text-indigo-500 p-3">All Todos</h1>
    <hr>
    <ul class="py-5">
        @foreach ($todos as $todo)
            <li>{{$todo->title}}</li>
        @endforeach
    </ul>
@endsection