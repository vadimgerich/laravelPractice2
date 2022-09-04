<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login_check(Request $request){
        $user = DB::table('users')->where(['email'=>$request->get('email'),'password'=>$request->get('password')])->value('id');
        if($user!==null and $user>0){
            session(['user_id'=>$user]);
            return redirect('/');
        }
        return redirect()->back()->withErrors(['wrong_login_data'=>'Wrong login data, try again']);
    }

    private function do_registration(Request $user_data){
        DB::table('users')->insert(['user_name'=>'user1','login'=>'login1','email'=>$user_data->get('email'),'password'=>$user_data->get('password')]);
        $user_id = DB::table('users')->get('id')->last();
        session(['user_id'=>$user_id]);
        return redirect('/');
    }

    public function check_registration(Request $request){
        $errors = [];
        if($request->get('password') != $request->get('password2')){
            $errors[] = 'password1 and password2 are different';
        }

        if(DB::table('users')->where('email','=',$request->get('email'))->count('email')>0){           $errors[] = ['email_is_used'=>'email is already used'];
            $errors[] = 'email is already used';
        }

        if(count($errors)>0){
            return back()->withErrors($errors);
        }

        return $this->do_registration($request);
    }

    public function logout(Request $request){
        session()->put('user_id',null);
        return redirect('/');
    }
}
