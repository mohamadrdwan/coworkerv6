<?php

namespace App\Http\Controllers\MtnSyriatel;

use Illuminate\Http\Request;
use App\mtnpreprice_fill;
use App\Http\Controllers\Controller;

class mtnprepricefill_controller extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'number'    =>  'required',
            'categories'     =>  'required',
            'price'     =>  'required'

        ]);
        $preprice = new mtnpreprice_fill([
            'number'    =>  $request->get('number'),
            'categories'     =>  $request->get('categories'),
            'price'     =>  $request->get('price')

        ]);
        $preprice->save();
        return redirect()->route('mtnsyrtemp')->with('success', 'Data Added');
    }
}
