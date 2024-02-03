<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(){
        return view('front.auth.register');
    }

    public function processRegistration( Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'min:8 | required | same:confirm_password',
            'confirm_password' => 'required ',
        ]);

        if ($validator ->passes()) {
            # code...
        }else{
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }
    public function login(){

    }
}
