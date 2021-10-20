<?php

namespace App\Http\Controllers\MtnSyriatel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ViewController extends Controller
{
    /*public function need()
    {
        return view('need');
    }*/
    public function services()
    {
        return view('services');
    }
    public function mtnsyrtemp()
    {
        return view('mtnsyrtemp');
    }
}
