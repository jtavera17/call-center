<?php

namespace App\Http\Controllers;

use App\Models\Seguimientos;
use Illuminate\Http\Request;

class SeguimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seguimiento.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seguimiento.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'asunto' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'fecha_seg_actual' => 'required|date',
            'num_dias' => 'required|integer',
            'prox_fech_seg' => 'required|date'
        ]);
        
        return 'Guardado';
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seguimientos  $seguimientos
     * @return \Illuminate\Http\Response
     */
    public function show(Seguimientos $seguimientos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seguimientos  $seguimientos
     * @return \Illuminate\Http\Response
     */
    public function edit(Seguimientos $seguimientos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seguimientos  $seguimientos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seguimientos $seguimientos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seguimientos  $seguimientos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seguimientos $seguimientos)
    {
        //
    }
}
