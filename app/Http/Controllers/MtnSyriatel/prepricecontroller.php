<?php

namespace App\Http\Controllers\MtnSyriatel;

use Illuminate\Http\Request;
use App\preprice;
use App\Http\Controllers\Controller;

class prepricecontroller extends Controller
{
	public function dropDownShow(Request $request)
	{

       $categories=preprice::all();//get data from table
	   return view('mtnsyrtemp',compact('categories'));//sent data to view

    }
}
