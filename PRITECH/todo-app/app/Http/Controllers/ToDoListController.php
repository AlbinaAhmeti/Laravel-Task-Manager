<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index()
    {
        $todoList = ToDoList::where('user_id', auth('web')->id())->get();
        return view('dashboard', compact('todoList'));
    }

    public function create()
    {
        return view('todolist.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulli' => 'required|string|max:255',
            'pershkrimi' => 'required',
        ], [
            'titulli.required' => 'Titulli është i detyrueshëm.',
            'pershkrimi.required' => 'Përshkrimi është i detyrueshëm.',
        ]);

        try {
            ToDoList::create([
                'titulli' => $request->titulli,
                'pershkrimi' => $request->pershkrimi,
                'user_id' => auth('web')->id(),
            ]);
            return redirect()->route('todolist.index')->with('success', 'To-Do List created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Ndodhi një gabim gjatë ruajtjes së të dhënave.');
        }
    }

    public function show($id)
    {
        $todoList = ToDoList::where('id', $id)->where('user_id', auth('web')->id())->firstOrFail();
        return view('todolist.show', compact('todoList'));
    }

    public function edit($id)
    {
        $todoList = ToDoList::where('id', $id)->where('user_id', auth('web')->id())->firstOrFail();
        return view('todolist.edit', compact('todoList'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulli' => 'required|string|max:255',
            'pershkrimi' => 'required',
        ]);

        $todoList = ToDoList::where('id', $id)->where('user_id', auth('web')->id())->firstOrFail();
        $todoList->update($request->only('titulli', 'pershkrimi'));

        return redirect()->route('todolist.index')->with('success', 'To-Do List updated successfully.');
    }

    public function destroy($id)
    {
        $item = ToDoList::where('id', $id)->where('user_id', auth('web')->id())->firstOrFail();
        $item->delete();

        return redirect()->route('todolist.index')->with('success', 'Item deleted successfully.');
    }
}
