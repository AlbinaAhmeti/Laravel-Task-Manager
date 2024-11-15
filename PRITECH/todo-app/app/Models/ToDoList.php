<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;

    protected $table = "to_do_lists";

    // Specify which attributes are mass assignable
    // Add this to your ToDoList model:
    protected $fillable = ['titulli', 'pershkrimi', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

