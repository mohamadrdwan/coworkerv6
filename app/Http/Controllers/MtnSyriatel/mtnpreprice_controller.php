<?php

namespace App\Http\Controllers\MtnSyriatel;

use Illuminate\Http\Request;
use App\mtnpreprice;
use App\Http\Controllers\Controller;

class mtnpreprice_controller extends Controller
{
    public function dropDownShow(Request $request)
	{

       $categories=mtnpreprice::all();//get data from table
	   return view('mtnsyrtemp',compact('categories'));//sent data to view

    }
}
