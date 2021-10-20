<?php

namespace App\Http\Controllers\MtnSyriatel;

use Illuminate\Http\Request;
use App\mtnpostprice_fill;
use App\Http\Controllers\Controller;

class mtnpostpricefill_controller extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'number'    =>  'required',
            'categories'     =>  'required',
            'price'     =>  'required'

        ]);
        $postprice = new mtnpostprice_fill([
            'number'    =>  $request->get('number'),
            'categories'     =>  $request->get('categories'),
            'price'     =>  $request->get('price')

        ]);
        $postprice->save();
        return redirect()->route('mtnsyrtemp')->with('success', 'Data Added');
    }
}
