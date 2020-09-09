@extends('todos.layout')

@section('title')
    Create Todos
@endsection

@section('content')
    <div class="flex justify-between border-b border-indigo-500 pb-4 p-3"> 
        <h1 class="text-2xl text-indigo-500">Create A Todo</h1>
        <a href="{{ route('todo.index') }}" class="mx-3 p-2 border rounded cursor-pointer bg-indigo-500 text-white">All Todos</a>
    </div>

    <x-alert/>

    <form action="{{ route('todo.store') }}" method="post" class="py-5">
        @csrf
        <input type="text" name="title" class="py-2 px-2 border w-2/3">
        <input type="submit" value="Create" class="p-2 border rounded bg-indigo-500 text-white">
    </form>
@endsection
