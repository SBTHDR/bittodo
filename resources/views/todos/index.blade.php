@extends('todos.layout')

@section('title')
    All Todos
@endsection

@section('content')
    <div class="flex justify-between items-center p-3 pb-4 border-b border-indigo-500"> 
        <h1 class="text-2xl text-indigo-500">All Todos</h1>
        <div>
            <a href="/todos/create" class="mx-3 p-2 border rounded cursor-pointer bg-indigo-500 text-white">Create Todo</a>
            <a href="/" class="mx-3 p-2 border rounded cursor-pointer bg-indigo-500 text-white">Home</a>
        </div>
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
                        <span onclick="event.preventDefault();document.getElementById('form-incomplet-{{$todo->id}}').submit()" class="fas fa-check text-teal-500 cursor-pointer px-2"></span>
                        <form style="display:none" id="{{'form-incomplet-' . $todo->id}}" method="post" action="{{ route('todo.incomplete', $todo->id) }}">
                        @csrf
                        @method('delete')
                        </form>
                    @else
                        <span onclick="event.preventDefault();document.getElementById('form-complet-{{$todo->id}}').submit()" class="fas fa-check text-gray-300 cursor-pointer px-2"></span>
                        <form style="display:none" id="{{'form-complet-' . $todo->id}}" method="post" action="{{ route('todo.complete', $todo->id) }}">
                        @csrf
                        @method('put')
                        </form>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
@endsection