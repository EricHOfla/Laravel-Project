<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   public function ShowLogin(){
           return view('login');
    }

    public function ShowAllData(){
        $data=Contact::all();

        return view('select', compact('data'));
    }

    public function Delete($id){
     $delete=Contact::findOrFail($id);
     $delete->delete();
     return redirect()->route('select.data')->with('success', 'Deleted Success');
    }

    public function Edit($id){
        $data=Contact::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function Update(Request $request, $id){
     
    $request->validate([
        'name' => 'required|string|max:250',
        'email' =>'required|email',
        'contact' => ['required', 'regex:/^(078|072|079|073)[0-9]{7}$/'],
        'subject' => 'required|string|max:100',
        'message' => 'required|string|max:250'
    ], 
    [
         'contact.regex' => 'The contact number must start with 078, 072, 073, or 079 and be 10 digits long.'
    
    ]);

    $data=Contact::findOrFail($id);
    $data->Update($request->all());
    return redirect()->route('select.data')->with('success', 'Updated Success');

    

}


public function ShowRegister(){
    return view('registerpage');
}

public  function RegisterStore(Request $request){
    $request->validate([
        'name' => 'required|string|max:250',
        'username' => 'required|string|max:250',
        'email' => 'required|email',
        'password'=> 'required|string|min:6',
    ]);

    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'username'=>$request->username,
        'password'=>Hash::make($request->password),
    ]);

    return redirect()->back()->with('success', "User register Succussfull");

}

public function Login(Request $request){
 $credition=$request->only('username', 'password');

 if(Auth::attempt($credition)){
    $request->session()->regenerate();
    $user= Auth::user();

    if($user->role=== 'admin'){
      
        return redirect()->route('data.all')->with('login', 'Login success');
    }
   if ($user->role=='manager') {
    return view('managerdata');
   } else {
    return view('userdata');
   }
   

    
 }
 return back()->withErrors([
    'username' => 'Invalid Credentials',
 ]);
}
 
public function AllData(){

    if (!Auth::check()) {
        return redirect('/login');
    }


$data= User::all();
return  response()
  ->view('admin', compact('data'))
  ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
  ->header('Pragma', 'no-cache')
  ->header('Expires', '0');
}
 public function Logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');

 }

}