<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ordersdetails;
use App\Models\feedback;
use App\Models\adminlogin;
use App\Models\booking;


use Auth;
use Illuminate\Support\Facades\DB;
class orderscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viewservices');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders');
    }
    
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
        public function store(Request $request)
        {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()

    {
        $servicedetails = ordersdetails::all();
        return view('ordersItem')->with('servicedetails',$servicedetails );
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function orderplace(Request $req)
    {
        $adminId=Session::get('admin')['id'];
         $allbooking= cart::where('admin_id',$adminId)->get();
         foreach($allbooking as $booking)
         {
             $order= new order;
             $order->service_id=$booking['service_id'];
             $order->admin_id=$booking['admin_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             booking::where('admin_id',$adminId)->delete(); 
         }
         $req->input();
         return redirect('/');
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
