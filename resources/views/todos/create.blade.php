@extends('todos.layout')

@section('title')
    Create Todos
@endsection

@section('content')
    <div class="flex justify-center p-3"> 
        <h1 class="text-2xl text-indigo-500">Create A Todo</h1>
        <a href="/todos" class="mx-3 p-2 border rounded cursor-pointer bg-indigo-500 text-white">All Todos</a>
    </div>
    <hr>
    <x-alert/>
    <form action="/todos/create" method="post" class="py-5">
        @csrf
        <input type="text" name="title" class="py-2 px-2 border">
        <input type="submit" value="Create" class="p-2 border rounded bg-indigo-500 text-white">
    </form>
@endsection
