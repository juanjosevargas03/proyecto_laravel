<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCurriculoRequest;


use App\curriculo;
use Illuminate\Http\Request;

class curriculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $curriculos = curriculo::where('seccional', 'LIKE', "%$keyword%")
                ->orWhere('area_conocimiento', 'LIKE', "%$keyword%")
                ->orWhere('facultad', 'LIKE', "%$keyword%")
                ->orWhere('componente', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('mes', 'LIKE', "%$keyword%")
                ->orWhere('año', 'LIKE', "%$keyword%")
                ->orWhere('responsable', 'LIKE', "%$keyword%")
                ->orWhere('correo', 'LIKE', "%$keyword%")
                ->orWhere('contacto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $curriculos = curriculo::paginate($perPage);
        }

        return view('curriculos.index', compact('curriculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('curriculos.create',[

            'curriculo' => new curriculo()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(SaveCurriculoRequest $request)
    {
        
        $requestData = $request->all();
        
        curriculo::create($requestData);

        return redirect('curriculos')->with('flash_message', 'curriculo added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {

        $id=$request->get('id_cur');

        $curriculo = curriculo::findOrFail($id);

        return view('curriculos.show', compact('curriculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $id=$request->get('id_cur');

        $curriculo = curriculo::findOrFail($id);

        return view('curriculos.edit', compact('curriculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $id=$request->get('id_cur');
        
        $requestData = $request->all();
        
        $curriculo = curriculo::findOrFail($id);
        $curriculo->update($requestData);

        return redirect('curriculos')->with('flash_message', 'curriculo updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Request $request)
    {
        $id=$request->get('id_cur');

        curriculo::destroy($id);

        return redirect('curriculos')->with('flash_message', 'curriculo deleted!');
    }
}
