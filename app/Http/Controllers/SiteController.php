<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class SiteController extends Controller
{
   public function hhh(){

    return view('home');
   }

   public function ShowContact(){
    return view('contact');
   }

   public function ShowAbout(){
    return view('site.about');
   }

   public function ContactStore(Request $equest){
        $equest->validate([
            'name' => 'required|string|max:250',
            'email' =>'required|email',
            'contact' => ['required', 'regex:/^(078|072|079|073)[0-9]{7}$/'],
            'subject' => 'required|string|max:100',
            'message' => 'required|string|max:250'
        ], 
        [
             'contact.regex' => 'The contact number must start with 078, 072, 073, or 079 and be 10 digits long.'
        ]);
        Contact::create($equest->all());
        return redirect()->back()->with('success', 'Message Send Success');
   }

   public function Retrive(){
      
    $datas=Contact::all();

    return view('selecteddata', compact('datas'));

   }
}
