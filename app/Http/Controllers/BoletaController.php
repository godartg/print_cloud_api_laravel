<?php

namespace App\Http\Controllers;

use App\Boleta;
use Illuminate\Http\Request;
use GoogleCloudPrint;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'ejemplo';
        return View('imprimiendo');
    }

    public function imprimir()
    {
        
        $printerId = '9d026cf7-d541-4843-1720-763a3b2fc33c';
        GoogleCloudPrint::asHtml()
        ->url('https://opensource.org/licenses/MIT')
        ->printer($printerId)
        ->send();
        return back()->withInput();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function show(Boleta $boleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Boleta $boleta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boleta $boleta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boleta $boleta)
    {
        //
    }
}
