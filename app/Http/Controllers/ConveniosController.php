<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convenio;
use App\Http\Requests\SaveConvenioRequest;

class ConveniosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convenios = Convenio::paginate(25);

        return view('convenios.index',compact('convenios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('convenios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveConvenioRequest $request )
    {
        $requestData = $request->all();

        Convenio::create($requestData);
      
         return redirect()->route('convenios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $id_convenio = $request->get('id_convenio');

        $convenio = Convenio::find($id_convenio);

        return view('convenios.show',[

            'convenio' => $convenio

        ]);
    }

    public function pdf(Request $request)
    {

        $id_convenio = $request->get('id_convenio');

        $convenio = Convenio::find($id_convenio);

        $pdf = \PDF::loadView('convenios.Pdf', compact('convenio'));

     return $pdf->download('convenios.Pdf.pdf');

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        $id_convenio = $request->get('id_convenio');

        $convenio = Convenio::find($id_convenio);
        return view('convenios.edit',[

            'convenio' => $convenio

        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $id_convenio = $request->get('id_convenio');

        $requestData = $request->all();
        $convenio = Convenio::findOrFail($id_convenio);

        $convenio->update($requestData);

        return redirect()->route('convenios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id_convenio = $request->get('id_convenio');

        $convenio = Convenio::find($id_convenio);
        $convenio->delete();

         return redirect()->route('convenios.index');
        
    }
}
