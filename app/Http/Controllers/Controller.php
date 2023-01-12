<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController as UserController;
use App\Http\Controllers\TodosController as TodosController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        return view('welcome');
    }

    public function posts()
    {
        return view('post');
    }

    public function new_post()
    {
        return view('new_post');
    }

    public function users(Request $request)
    {
        return view('users', ['users' => UserController::get_users()]);
    }

    public function new_user(Request $request)
    {
        if ($request->isMethod('get')){
            return view('new_user');

        } else if($request->isMethod('post')){
            $name = $request->input('name');
            $email = $request->input('email');
            $username = $request->input('username');
            $status = UserController::add_user($name, $email, $username);
            return view('new_user', ['status' => $status]);
        }
    }

    public function tasks()
    {
        return view('tasks', ['tarefas' => TodosController::get_todos()]);
    }

    public function new_task()
    {
        return view('new_task');
    }

    public function user_details($id)
    {
        return view('user_details', ['user' => UserController::get_user($id)]);
    }

    
}
