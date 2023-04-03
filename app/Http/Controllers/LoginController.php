<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if(Auth::guard('user')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                $admin = User::where(['email'=>$data['email']])->first();
                 echo "Testing Successful";
            }else
            {
                echo "Wrong Credentials";
            }

        }   
    }

}
