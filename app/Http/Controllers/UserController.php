<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public static function get_users(){
        $users = DB::table('users_list')->get();
        return $users;
    }

    public static function get_user($id){
        $user = DB::table('users_list')->where('id', $id)->first();
        return $user;
    }

    private static function verify_email_and_username($email, $username){
        for ($i=0; $i < count(UserController::get_users()); $i++) { 
            if(UserController::get_users()[$i]->email == $email){
                return false;
            }
            if(UserController::get_users()[$i]->username == $username){
                return false;
            }
        }
        return true;
    }

    public static function add_user($name, $email, $username){

        $status = [
            'class_alert' => '',
            'message' => ''
        ];

        if($email == null || $username == null || $name == null){
            return $status = [
                'class_alert' => 'alert-danger',
                'message' => 'Linhas em branco'
            ];
        }


        if(!UserController::verify_email_and_username($email, $username)){
            return $status = [
                'class_alert' => 'alert-danger',
                'message' => 'Email ou Username já cadastrado'
            ];
        }

        DB::table('users_list')->insert([
            'name' => $name,
            'email' => $email,
            'username' => $username
        ]);

        return $status = [
            'class_alert' => 'alert-success',
            'message' => 'Usuário cadastrado com sucesso'
        ];
    }

    public static function update_user(Request $request, $id){

        $name = $request->input('name');
        $email = $request->input('email');
        $username = $request->input('username');
        $user = UserController::get_user($id);
       
        


        if ($user->email != $email){
            for ($i=0; $i < count(UserController::get_users()); $i++) { 
                if(UserController::get_users()[$i]->email == $email && $user->id != UserController::get_users()[$i]->id){
                    return redirect()->back()->with('error', 'Email já cadastrado');
                }
            }
        } else if ($user->username != $username){
            for ($i=0; $i < count(UserController::get_users()); $i++) { 
                if(UserController::get_users()[$i]->username == $username && $user->id != UserController::get_users()[$i]->id){
                    return redirect()->back()->with('error', 'Username já cadastrado');
                }
            }
        } 
        DB::table('users_list')->where('id', $id)->update([
            'name' => $name,
            'email' => $email,
            'username' => $username
        ]);


        return redirect()->back()->with('success', 'Usuário atualizado com sucesso');
    }


    public static function delete_user($id){
   
        DB::table('users_list')->where('id', $id)->delete();
        return redirect()->route('users');
    }
}
