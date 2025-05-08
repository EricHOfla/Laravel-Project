<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Product;

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

   public function ShowImageForm(){
     return view('imageform');
   }

   public function ImageUpload(Request $request){
         $request->validate([
          'product' => 'required|string|min:2',
          'price' => 'required|numeric|min:0',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);
         $imageName= time() . '.' . $request->image->extension();
         $request->image->move(public_path('picture'), $imageName);

         Product::create([
          'product' =>$request->product,
          'price' => $request->price,
          'image' =>$imageName
         ]);

    return back()->with('Byakunze', 'Upload Successfully');

   }

   public function ViewImage(){
     $image = Product::all();
     return view('ShowImage', compact('image'));
   }

   
}
