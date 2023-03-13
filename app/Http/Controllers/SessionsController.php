<?php

namespace App\Http\Controllers;



class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'you logged out!');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'max:255', 'email', 'exists:users,email'],
            'password' => ['required', 'max:255', 'min:7']
        ]);

        if (auth()->attempt($attributes)) {
            //session fixation ?? 
            Session()->regenerate();


            return redirect('/')->with('success', 'you have logged in successfully');
        }
    }
}
