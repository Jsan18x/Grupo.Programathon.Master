<?php

namespace App\Http\Controllers;

use App\RegistroMenores;
use Illuminate\Http\Request;
use Auth;

class RegistroMenoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegistro()
    {
        return view('registroMenores');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRegistro(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getAntecedentes()
    {
        $user = Auth::user();
        
        return view('antecedentes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegistroMenores  $registroMenores
     * @return \Illuminate\Http\Response
     */
    public function show(RegistroMenores $registroMenores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegistroMenores  $registroMenores
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistroMenores $registroMenores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistroMenores  $registroMenores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroMenores $registroMenores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegistroMenores  $registroMenores
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistroMenores $registroMenores)
    {
        //
    }
}
