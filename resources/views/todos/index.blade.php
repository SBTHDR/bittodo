@extends('todos.layout')

@section('title')
    All Todos
@endsection

@section('content')
    <div class="flex justify-center p-3 border-b border-indigo-500 pb-4"> 
        <h1 class="text-2xl text-indigo-500">All Todos</h1>
        <a href="/todos/create" class="mx-3 p-2 border rounded cursor-pointer bg-indigo-500 text-white">Create Todo</a>
        <a href="/" class="mx-3 p-2 border rounded cursor-pointer bg-indigo-500 text-white">Home</a>
    </div>

    <x-alert/>

    <ul class="py-5">
        @foreach ($todos as $todo)
            <li class="flex justify-between p-2">
                @if ($todo->completed)
                    <p class="line-through text-gray-600">{{$todo->title}}</p>
                @else
                    <p>{{$todo->title}}</p>
                @endif
                
                <div>
                    <a href="/todos/{{$todo->id}}/edit" class="cursor-pointer text-indigo-500 text-white">
                    <span class="fas fa-edit px-2"></span>
                    </a>
                    @if ($todo->completed)
                        <span class="fas fa-check text-teal-500 px-2"></span>
                    @else
                        <span class="fas fa-check text-gray-300 cursor-pointer px-2"></span>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
@endsection