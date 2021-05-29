<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class editcontroller extends Controller
{
    public function showdata($id)
    {
        $data=service::find($id);
       return view('edit',['data'=>$data]);
    }
  
    public function edit(Request $req)
    {
        
        $data=service::find($req->id);
          $data->Service=$req->Service;
          $data->features=$req->features;
          $data->unit=$req->unit;
          $data->price=$req->price;
          $data->gallery=$req->gallery;
          $data->save();
          return redirect('allservices');
    }
  }

