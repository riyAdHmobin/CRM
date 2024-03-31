<?php

namespace App\Http\Controllers;

use App\Models\LeadModel;
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

            $lead = new LeadModel;

            $lead->first_name = $req['first_name'];
            $lead->last_name = $req['last_name'];
            $lead->email = $req['email'];
            $lead->phone = $req['phone'];
            $lead->title = $req['title'];
            $lead->company_name = $req['company_name'];
            $lead->lead_status = $req['lead_status'];
            $lead->lead_source = $req['lead_source'];

            $lead->building_no = $req['building_no'];
            $lead->street = $req['street'];
            $lead->state = $req['state'];
            $lead->city = $req['city'];
            $lead->zip_code = $req['zip_code'];
            $lead->country = $req['country'];

            $lead->note_1 = $req['note_1'];
            $lead->note_2 = $req['note_2'];

            $lead->save();

            return redirect('/leads/manage-leads');
            
        }
        return view('leads/add_lead');
    }

    public function manage_leads(){
        return view('leads/manage_leads');
    }
}
