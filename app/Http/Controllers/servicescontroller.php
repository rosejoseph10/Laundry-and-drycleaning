<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\booking;
use App\Models\User;


use Session;

class servicescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=service::all();
        return view('viewservices',['viewservices'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $data =service::find($id);
        return view('detail',['viewservices'=>$data]);
    }    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function Booking(Request $req)
       {
          if($req->session()->has('LoggedUser'))
          {
             $booking= new booking;
             $booking->admin_id=session('LoggedUser');
             $booking->service_id=$req->service_id;
             $booking->save();
             return back()->with('success','booking successful');
            
          }
          else
          {
            
             return redirect('/auth/login')->with('fail','you must be loggedin');
         }
        }
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function bookingitem()
    {
       $adminId=Session::get('admin')['id'];
       return booking::where('admin_id',$adminId)->count();
    }

    public function addservice(Request $req){
        
        $data=$req->input();
        $service= $data['service'];
        $features= $data['features'];
        $unit= $data['unit'];
        $price = $data['price'];
        $gallery = $data['gallery'];
        $p = new service();
        $p->service  = $service;
        $p->features = $features;
        $p->unit = $unit;
        $p->price = $price;
        $p->gallery = $gallery;
        $p->save();

       // var_dump($data);
        return view('adminhome');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('addservice');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
