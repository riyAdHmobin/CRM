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

    public function add_lead(Request $req){
        $submit = $req['submit'];
        if($submit == "submit"){
            $req->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                // 'email' => '',
                'phone' => 'required|min:11',
                'title' => 'required',
                'company_name' => 'required',
                // 'lead_status' => '',
                // 'lead_source' => '',

                'building_no' => 'required',
                'street' => 'required',
                'state' => 'required',
                'city' => 'required',
                'zip_code' => 'required',
                'country' => 'required',

                // 'note_1' => '',
                // 'note_2' => '',
            ]);
        }
        return view('leads/add_lead');
    }

    public function manage_lead(){
        return view('leads/manage_lead');
    }
}
