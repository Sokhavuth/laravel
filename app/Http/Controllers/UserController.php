<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    
    public function checkUser(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        $user = DB::select('select * from users where email = ?', [$email]);
        
        if($user){
            $user = DB::select('select * from users where password = ?', [$password]);
            if($user){
                session(['user'=>$user]);
                return view('admin/index', config('settings'));
            }else{
                $setting = config('settings');
                $setting['message'] = "ពាក្យ​សំងាត់​មិន​ត្រឹម​ត្រូវ​ទេ!";
                return view('login', $setting);
            }   
        }else{
            $setting = config('settings');
            $setting['message'] = "Email មិន​ត្រឹម​ត្រូវ​ទេ!";
            return view('login', $setting);
        }
        
    }
}