<?php

namespace App\Http\Controllers;

use App\Cajero1;
use App\Cajero2;
use App\Cajero3;
use App\Cajero4;

use Illuminate\Http\Request;

class Cajero1Controller extends Controller
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
        $cajero1= Cajero1::all();
        // $cajero1= Cajero1::orderBy('id', 'ASC')->paginate(5000);
        $cajero2= Cajero2::orderBy('id', 'ASC')->paginate(5000);
        
        $cajero3= Cajero3::orderBy('id', 'ASC')->paginate(5000);
        $cajero4= Cajero4::orderBy('id', 'ASC')->paginate(5000);
        
        // $cajero4= Cajero4::orderBy('id', 'DESC')->paginate(5000);
        return view('cola1.create', compact('cajero1', 'cajero2', 'cajero3', 'cajero4'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caje1 = new Cajero1();
         $cantidad = $request->cantidad;
         $caje1->cantidad = $cantidad;
         $caje1->save();
         return redirect()->route('cola1.create')->with('datos','Estas en fila en el ' .strtoupper('cajero 1'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cajero1  $cajero1
     * @return \Illuminate\Http\Response
     */
    public function show(Cajero1 $cajero1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cajero1  $cajero1
     * @return \Illuminate\Http\Response
     */
    public function edit(Cajero1 $cajero1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cajero1  $cajero1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cajero1 $cajero1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cajero1  $cajero1
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cajero1=Cajero1::find($id);
        $cajero1->delete();
        return redirect()->route('cola1.create')->with('datos','Se ha atendido alguient del  ' .strtoupper('cajero 1'));
    }

    
}
