<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create(Request $request){
        return view('demo');
    }

    public function store(Request $request){

        $username = $request->input('username');
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $password = $request->input('password');
        $path = $request->file('profile');
        $path->storeAs('public/images', 'abc.jpeg');
        $path = '/images/abc.jpeg';
        return view('dashboard', compact('fullname', 'username', 'email' , 'password'));
    }
}
