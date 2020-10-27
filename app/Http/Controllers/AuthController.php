<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class AuthController extends Controller
{   
    public function login(Request $request){
        $message=[
            'password.regex' => 'Password must contain 1 number and 1 special character'
        ];
        $validator = Validator::make($request->all(),[
            'email'=>'required|email|exists:users,email',
            'password' => 'required|min:6|regex:/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})/',
        ],$message);       

        if($validator->fails()) return $this->validationError($validator);    
        
        $user=User::where('email',$request->email)->first();
        if(!Hash::check($request->password,$user->password)) return $this->errorResponse('invalid password');
        
        Session::put('user_id', $user->id);            
        return $this->successResponse("User created successfully");
    }
    public function signup(Request $request){
        $message=[
            'password.regex' => 'Password must contain 1 number and 1 special character'
        ];
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password' => 'required|min:6|regex:/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})/',
        ],$message);       

        if($validator->fails()) return $this->validationError($validator);    
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> Hash::make($request->password)
        ]);
        Session ::put('user_id', $user->id);            

        return $this->successResponse("User created successfully");
    }

}