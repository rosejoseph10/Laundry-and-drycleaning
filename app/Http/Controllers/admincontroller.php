<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminlogin;
use App\Models\adminregister;
use App\Models\Ordersdetails;
use App\Models\service;
use App\Models\orderbooking;


use Illuminate\Support\Facades\Hash;


class admincontroller extends Controller
{
    
    public function create(){
        return view('adminlogin');
        
    }
  public function register(){
       return view('adminregister');
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
    $admin = new adminregister;
    $admin->Username = $request->Username;
    $admin->Phnno = $request->Phnno;
    $admin->Email = $request->Email;
    $admin->Password=Hash::make($request->Password);
  
    $save = $admin->save();

    if($save){
        return back()->with ('Success','New Admin has been successfully created');
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
 
            $userInfo = adminregister::where('Email','=',$request->Email)->first();
        
            if(!$userInfo){
                return back()-> with ('fail', 'We dont recognize your Email ');
            }else {
   
   //check Password
   if(Hash::check($request->Password, $userInfo->Password)){
    $request->session()->put('LoggedUser',$userInfo->id);

        return view('/adminhome'); 
   }else {
    return back()-> with ('fail','Incorrect Password');
            }

        }

      }
      

    
      
 public function allservices()
   {
       $data=service::all();
       return view('allservices',compact('data'));
   }
   
   public function delete($id)
    {
        $data=service::find($id);
       $data->delete();
       return redirect('allservices');
    }

   public function deletebooking($id)
    {
      $data=orderbooking::find($id);
       $data->delete();
      return redirect('/viewbookeditem');
    //return ($id);
    }
}