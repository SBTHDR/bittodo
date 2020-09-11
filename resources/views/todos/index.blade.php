@extends('todos.layout')

@section('title')
    All Todos
@endsection

@section('content')
    <div class="flex justify-between items-center p-3 pb-4 border-b border-indigo-500"> 
        <h1 class="text-2xl text-indigo-500">All Todos</h1>
        <div>
            <a href="{{ route('todo.create') }}" class="mx-3 p-2 border rounded cursor-pointer bg-indigo-500 text-white">Create Todo</a>
            <a href="/" class="mx-3 p-2 border rounded cursor-pointer bg-indigo-500 text-white">Home</a>
        </div>
    </div>

    <x-alert/>

    <ul class="py-5">
        @forelse ($todos as $todo)
            <li class="flex justify-between p-2">
                <div>
                    @include('todos.complete-button')
                </div>
                
                @if ($todo->completed)
                    <p class="line-through text-gray-600">{{$todo->title}}</p>
                @else
                    <p>{{$todo->title}}</p>
                @endif
                
                <div>
                    <a href="{{ route('todo.edit', $todo->id) }}" class="cursor-pointer text-indigo-500 text-white">
                    <span class="fas fa-edit px-2"></span>
                    </a>

                    <span class="fas fa-trash text-red-500 px-2 cursor-pointer" onclick="event.preventDefault();
                    if(confirm('Are you sure?')) {
                        document.getElementById('form-delete-{{$todo->id}}').submit()
                    }"/>
                    <form style="display:none" id="{{'form-delete-' . $todo->id}}" method="post" action="{{ route('todo.destroy', $todo->id) }}">
                    @csrf
                    @method('delete')
                    </form>
                </div>
            </li>
            @empty
            <p class="text-2xl text-indigo-500">Your Todo list is Empty!</p>
            <small class="text-indigo-500">Create one now</small>
        @endforelse
    </ul>
@endsection