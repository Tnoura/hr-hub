<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class HubController extends Controller
{
    public function home(){
        return view('Principal.home');
    }
    public function formation(){
        return view('Principal.formation');
    }
    public function learning(){
        return view('Principal.learning');
    }
    public function recruitment(){
        return view('Principal.recruitment');
    }
    public function team(){
        return view('Principal.team');
    }
    public function sortalent(){
        return view('Principal.sortalent');
    }
    public function contact(){
        return view('Principal.contact');
    }
    public function about(){
        return view('Principal.about');
    }

    public function store(Request $request){
        $contact=new Contact();
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->phone_number=$request->input('phone_number');
        $contact->message=$request->input('message');
    
        $contact->save();
        return redirect('/')->with('success' ,'this contact create Successfuly');
    }
}
