<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class maincontroller extends Controller
{
        function login(){
            return view('auth.login');
        }
        function register(){
            return view('auth.register');

        }

        

function save(Request $request){
  
 //validate requests
    $request->validate([
    'Username'=>'required',
    'Phnno'=>'required',
    'Email'=>'required|Email|unique:admins',
    'Password'=>'required|min:5|max:15',
    ]);

        
    //insert data into database
    $admin = new Admin;
    $admin->Username = $request->Username;
    $admin->Phnno = $request->Phnno;
    $admin->Email = $request->Email;
    $admin->Password=Hash::make($request->Password);

    $save = $admin->save();
    if($save){
        return back()->with ('Success','New User has been successfully created');
        }else{
        return back()->with ('Fail','Something went wrong, try again later');
            }
        }
        function check(Request $request) {
            //validate requests
            $request->validate([
            'Email'=>'required|Email',
            'Password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('Email','=',$request->Email)->first();
        
        if(!$userInfo){
            return back()-> with ('fail', 'We dont recognize your Email ');
        }else {

            //check Password
            if(Hash::check($request->Password, $userInfo->Password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard'); 
        }else {
            return back()-> with ('fail', 'Incorrect Password');
                    }
                 }
        } 

        function logout() {
            if(session()->has('LoggedUser')){
                session()->pull('LoggedUser');
                return redirect('/auth/login');
            }
        }


        function dashboard(){
            $data=['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
            return view('admin.dashboard', $data);
        }
    }   