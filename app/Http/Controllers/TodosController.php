<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodosController extends Controller
{
    
    public static function get_todos()
    {
        $todos = DB::table('todos_list')->get();
        return $todos;
    }
}
