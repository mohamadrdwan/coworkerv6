<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\need;

class needcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $need = need::all()->toArray();
        return view('need.index', compact('need'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('need');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'phone'     =>  'required',
            'email'     =>  'required',
            'subject'     =>  'required',
            'message'     =>  'required'

        ]);
        $need = new need([
            'name'    =>  $request->get('name'),
            'phone'     =>  $request->get('phone'),
            'email'     =>  $request->get('email'),
            'subject'     =>  $request->get('subject'),
            'message'     =>  $request->get('message')

        ]);
        $need->save();
        return redirect()->route('need.create')->with('message', 'Data Added');
    }
}