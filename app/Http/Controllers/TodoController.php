<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255'
        ]);
        
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Created successfully');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required|max:255'
        ]);
        
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message', 'Todo Updated');
    }
}
