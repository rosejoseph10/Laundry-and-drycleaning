<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\booking;
use App\Models\feedback;
use App\Models\orderbooking;

use Session;
use Illuminate\Support\Facades\DB;
class laundrycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     function booknow($sid)
        {
        //$adminid=session('LoggedUser','id');
        // $total= DB::table('booking')
        // ->join('services','services.id','=','booking.service_id')
        // ->where('booking.admin_id',$adminid)
        // ->where('booking.service_id',$sid)
       // ->select('services.price');
        //->first();

        $total=service::where('id',$sid)->first();
        $intp=(int) $total->price;
        $int=$intp+10;
        //return ($intp);
      return view('booknow')->with('total',$total)->with('int',$int);
      }

        public function bookeditem()
        {

            $viewservices=orderbooking::join('services','services.id','=','orderbookings.service_id')
           // ->select("orderbookings.service_id","orderbookings.admin_id,")
           ->select("orderbookings.*","orderbookings.id as obid","services.*")
        ->get();
        return view('bookeditemdetails')->with('viewservices',$viewservices);
       // return ($viewservices);
        }

      public function orderplace()
      {

        $id=session('LoggedUser','id');
       $viewservices=orderbooking::join('services','services.id','=','orderbookings.service_id')
      ->where('orderbookings.admin_id',$id)->get();
        return view('mybookings')->with('viewservices',$viewservices);
    
      }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');

    }
    public function about()
    {
        return view('about'); 

    }

    public function feedback()
    {
        $viewfeedback=feedback::all();
        return view ('viewfeedback',compact('viewfeedback'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $getname=request('name');
        $getemail=request('email');
        $getsubject=request('subject');
        $getmessage=request('message');
    
        $viewfeedback=new feedback;

        $viewfeedback->name= $getname;
        $viewfeedback->email=$getemail;
        $viewfeedback->subject=$getsubject;
        $viewfeedback->message=$getmessage;
        $viewfeedback->save();
        return redirect('contact');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        return view('Contactus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mybookings(Request $request)
    {
       
        $o=new orderbooking();
        $o->service_id=$request->service_id;
        $o->admin_id=session('LoggedUser','id');
        $o->status='pending';
        $o->payment_method=$request->payment;
        $o->payment_status='pending';
        $o->address=$request->address;
        $o->save();   
        
        return redirect('/viewservices');
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
