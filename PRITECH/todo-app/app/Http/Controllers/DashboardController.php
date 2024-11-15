<?php

namespace App\Http\Controllers;
use App\Models\TodoList; // Sigurohuni që të keni modelin e Todo
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        // Merrni të gjitha elementët nga tabela e to-do
        $todoList = TodoList::all();

        // Ktheni view-n dhe kaloni të dhënat
        return view('dashboard', compact('todoList'));
    }
}
