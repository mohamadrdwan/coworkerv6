<?php

namespace App\Http\Controllers\MtnSyriatel;

use Illuminate\Http\Request;
use App\preprice_fill;
//use Illuminate\Routing\Controller;
use App\Http\Controllers\Controller;


class preprice_fillcontroller extends Controller
{
   
    public function store(Request $request)
    {
        $this->validate($request, [
            'number'    =>  'required',
            'categories'     =>  'required',
            'price'     =>  'required'

        ]);
        $preprice = new preprice_fill([
            'number'    =>  $request->get('number'),
            'categories'     =>  $request->get('categories'),
            'price'     =>  $request->get('price')

        ]);
        $preprice->save();
        return redirect()->route('mtnsyrtemp')->with('message', 'Data Added');
    }

}
