<?php

namespace App\Http\Controllers;

use App\Cajero2;
use App\Cajero1;
use App\Cajero3;
use Illuminate\Http\Request;

class Cajero2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $cajero1= Cajero1::orderBy('id', 'DESC')->paginate(10);
        // return view('cola2.create',compact('cajero'));
        // return view('cola1.create', compact('ent'));
        return view('cola1.create', compact('cajero1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $caje2 = new Cajero2();
        $cantidad = $request->cantidad;
        $caje2->cantidad = $cantidad;
        $caje2->save();
        return redirect()->route('cola1.create')->with('datos','Estas en fila en el ' .strtoupper('cajero 2'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cajero2  $cajero2
     * @return \Illuminate\Http\Response
     */
    public function show(Cajero2 $cajero2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cajero2  $cajero2
     * @return \Illuminate\Http\Response
     */
    public function edit(Cajero2 $cajero2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cajero2  $cajero2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cajero2 $cajero2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cajero2  $cajero2
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      
        $cajero2=Cajero2::find($id);
        $cajero2->delete();
        return redirect()->route('cola1.create')->with('datos','Se ha atendido alguient del  ' .strtoupper('cajero 2'));
    }
}
