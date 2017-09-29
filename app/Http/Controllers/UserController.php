<?php

namespace App\Http\Controllers;



class UserController extends Controller
{
    public function index()
    {
     dd( \JWTAuth::attempt(['email'=>'vasyamindresku@gmail.ru','password'=>'123456']));
    }
    public function create(\Request $request)
    {
     dd( \JWTAuth::parseToken()->authenticate());
    }
}
