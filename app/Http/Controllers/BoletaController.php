<?php

namespace App\Http\Controllers;

use App\Boleta;
use Illuminate\Http\Request;
use GoogleCloudPrint;
use Illuminate\Support\Facades\Storage;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return View('index');
    }

    /**
     * Printing HTML from an URL
     */
    public function imprimirPagina()
    {
        
        $printerId = '2147c452-5582-a70c-a44d-a65f8fc99757';
        GoogleCloudPrint::asHtml()
        ->url('https://github.com/bnbwebexpertise/laravel-google-cloud-print')
        ->printer($printerId)
        ->send();
        return View('index');
    }
    /**
     * Printing page 3 to 10 of a PDF from a local file
     */
    public function imprimirPdf()
    {
        $url = Storage::url('public/100-JEAN-CARLOS-ACNAPURI.pdf');
        //return $url;
        //$contents = Storage::files('/public/100-JEAN-CARLOS-ACNAPURI.pdf');
        $printerId = '2147c452-5582-a70c-a44d-a65f8fc99757';
        GoogleCloudPrint::asPdf()
        ->file('storage/100-JEAN-CARLOS-ACNAPURI.pdf')
        ->range(1, 1)
        ->printer($printerId)
        ->marginsInCentimeters(5, 5, 5, 5)
        ->send();
        return View('index');
    }
    /**
     * Printing plain text with a 1cm margin on each sides using
     */
    public function imprimirTexto()
    {
        
        $printerId = '2147c452-5582-a70c-a44d-a65f8fc99757';
        GoogleCloudPrint::asText()
        ->content('Ejemplo de texto')
        ->printer($printerId)
        ->marginsInCentimeters(1, 1, 1, 1)
        ->send();
        return View('index');
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
