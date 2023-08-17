<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{

    public function login(){
        return view('register.login');
    }

    public function userLogin(){
        $user = request()->validate([
            'email' => Rule::exists('users','email'),
            'password'=> 'required'
        ]);
        if(auth()->attempt($user)){
            session()->regenerate();
            return redirect('/')->with('success','Welcome back');

        }
        else{
            return back()->withErrors('Wrong email id or password');
        }
    }

    public function create(){
        return view('register.register');
    }

    public function store(){
        
        $user = request()->validate([
            'name' => ['required','max:255' , 'min:3'],
            'username' => ['required','max:255','min:3',Rule::unique('users','name')],
            'email' => ['required','email',Rule::unique('users','email')],
            
            'password' => ['required','min:8','max:255']
        ]);

        $login = User::create($user);
        auth()->login($login);

        session()->flash('success','Your account has been created');
        return redirect('/');


    }
}
