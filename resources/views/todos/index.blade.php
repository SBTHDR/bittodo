@extends('todos.layout')

@section('title')
    All Todos
@endsection

@section('content')
    <div class="flex justify-center p-3"> 
        <h1 class="text-2xl text-indigo-500">All Todos</h1>
        <a href="/todos/create" class="mx-3 p-2 border rounded cursor-pointer bg-indigo-500 text-white">Create Todo</a>
    </div>
    <hr>
    <ul class="py-5">
        @foreach ($todos as $todo)
            <li>{{$todo->title}}</li>
        @endforeach
    </ul>
@endsection