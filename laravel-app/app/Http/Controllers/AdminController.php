<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function login(Request $req){

        $submit = $req['submit'];
        if($submit == "submit"){
            $req->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            if(\Auth::attempt($req -> only('email', 'password'))){
                return redirect('/home');
            }
            else{
                return redirect('/login') -> withError('Incorrect Email or Password');
            }
        }
        return view('login');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('/login');
    }

    public function add_lead(){
        return view('leads/add_lead');
    }

    public function manage_lead(){
        return view('leads/manage_lead');
    }
}
