<?php

namespace App\Http\Controllers\MtnSyriatel;

use Illuminate\Http\Request;
use App\postprice_fill;
use App\Http\Controllers\Controller;

class postprice_fillcontroller extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'number'    =>  'required',
            'categories'     =>  'required',
            'price'     =>  'required'

        ]);
        $postprice = new postprice_fill([
            'number'    =>  $request->get('number'),
            'categories'     =>  $request->get('categories'),
            'price'     =>  $request->get('price')

        ]);
        $postprice->save();
        return redirect()->route('mtnsyrtemp')->with('success', 'Data Added');
    }

}
