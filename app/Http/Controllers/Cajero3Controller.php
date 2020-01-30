<?php

namespace App\Http\Controllers;

use App\Cajero3;
use Illuminate\Http\Request;

class Cajero3Controller extends Controller
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
        return view('cola3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caje3 = new Cajero3();
        $cantidad = $request->cantidad;
        $caje3->cantidad = $cantidad;
        $caje3->save();
        return redirect()->route('cola1.create')->with('datos','Estas en fila en el ' .strtoupper('cajero 3'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cajero3  $cajero3
     * @return \Illuminate\Http\Response
     */
    public function show(Cajero3 $cajero3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cajero3  $cajero3
     * @return \Illuminate\Http\Response
     */
    public function edit(Cajero3 $cajero3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cajero3  $cajero3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cajero3 $cajero3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cajero3  $cajero3
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cajero3=Cajero3::find($id);
        $cajero3->delete();
        return redirect()->route('cola1.create')->with('datos','Se ha atendido alguient del  ' .strtoupper('cajero 3'));
    }
}
