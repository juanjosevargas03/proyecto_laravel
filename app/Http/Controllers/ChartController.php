<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class ChartController extends Controller
{
    public function index()
    {
        $pastel = DB::select("SELECT Programa , count(Programa) as Cantidad From personas Group By Programa");
        

        
        $barr= DB::select('SELECT  Programa,  count(Programa) as Cantidad From personas Group By 
            Programa' );

        $barra= DB::select('SELECT  Año,  count(Año) as Cantidad From personas Group By 
            Año' );


        return view('chart', ['pastel'=> $pastel])
        ->with(['barr'=>$barr])
        ->with(['barra'=>$barra]);
    }

public function chart_conv()
    {

        $pastell = DB::select("SELECT estado, count(estado) as Cantidad From convenios Group By estado");

         $barr = DB::select("SELECT pais, count(pais) as Cantidad From convenios Group By pais");

         return view('convenios.chart_convenios', ['barr'=>$barr])
        ->with(['pastell'=> $pastell]);


    }

    public function chart_redes()
    {

        $pastel = DB::select("SELECT estado_vinculacion, count(estado_vinculacion) as Cantidad From redes Group By estado_vinculacion");
        $pastel2 = DB::select("SELECT ubicacion, count(ubicacion) as Cantidad From redes Group By ubicacion");

         $barra = DB::select("SELECT objeto, count(objeto) as Cantidad From redes Group By objeto");

         return view('redes.chart_redes', ['barra'=>$barra])
        ->with(['pastel2'=> $pastel2])
        ->with(['pastel'=> $pastel]);



    }











    public function create()
    {
        
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
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit(Personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personas $personas)
    {
        //
    }
}
