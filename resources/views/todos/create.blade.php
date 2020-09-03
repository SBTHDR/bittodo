@extends('todos.layout')

@section('title')
    Create Todos
@endsection

@section('content')
    <h1 class="text-2xl text-indigo-500">Create A Todo</h1>
    <x-alert/>
    <form action="/todos/create" method="post" class="py-5">
        @csrf
        <input type="text" name="title" class="py-2 px-2 border">
        <input type="submit" value="Create" class="p-2 border rounded bg-indigo-500 text-white">
    </form>
@endsection
