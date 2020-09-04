@extends('todos.layout')

@section('title')
    Edit Todo
@endsection

@section('content')
    <div class="flex justify-center p-3 border-b border-indigo-500 pb-4"> 
        <h1 class="text-2xl text-indigo-500">Update Your Todo</h1>
    </div>

    <x-alert/>

    <form action="{{route('todo.update', $todo->id)}}" method="post" class="py-5">
        @csrf
        @method('put')
        <input type="text" name="title" value="{{ $todo->title }}" class="py-2 px-2 border">
        <input type="submit" value="Update" class="p-2 border rounded bg-indigo-500 text-white">
    </form>
    
    <a href="/todos" class="mx-3 p-2 border rounded cursor-pointer bg-indigo-500 text-white">Back To All Todos</a>
@endsection