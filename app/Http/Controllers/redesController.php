<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveRedesRequest;


use App\rede;
use Illuminate\Http\Request;

class redesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $redes = rede::where('unidad', 'LIKE', "%$keyword%")
                ->orWhere('programa', 'LIKE', "%$keyword%")
                ->orWhere('asociacion', 'LIKE', "%$keyword%")
                ->orWhere('ubicacion', 'LIKE', "%$keyword%")
                ->orWhere('objeto', 'LIKE', "%$keyword%")
                ->orWhere('costo_membresia', 'LIKE', "%$keyword%")
                ->orWhere('periodicidad_pago', 'LIKE', "%$keyword%")
                ->orWhere('fecha_vinculacion', 'LIKE', "%$keyword%")
                ->orWhere('estado_vinculacion', 'LIKE', "%$keyword%")
                ->orWhere('actividad_realizada', 'LIKE', "%$keyword%")
                ->orWhere('fecha_actividad', 'LIKE', "%$keyword%")
                ->orWhere('num_participantes', 'LIKE', "%$keyword%")
                ->orWhere('impacto_actividad', 'LIKE', "%$keyword%")
                ->orWhere('responsable_unisinu', 'LIKE', "%$keyword%")
                ->orWhere('pagina_web', 'LIKE', "%$keyword%")
                ->orWhere('observaciones', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $redes = rede::paginate($perPage);
        }

        return view('redes.index', compact('redes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('redes.create',[

            'red' => new rede()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(SaveRedesRequest $request)
    {
        
        $requestData = $request->all();
        
        rede::create($requestData);

        return redirect('redes')->with('flash_message', 'rede added!');
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
        $id=$request->get('id_red');
        $rede = rede::findOrFail($id);

        return view('redes.show', compact('rede'));
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
        $id=$request->get('id_red');

        $red = rede::findOrFail($id);

        return view('redes.edit', compact('red'));
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
        $id=$request->get('id_red');
        $requestData = $request->all();
        
        $rede = rede::findOrFail($id);
        $rede->update($requestData);

        return redirect('redes')->with('flash_message', 'rede updated!');
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
        $id=$request->get('id_red');

        rede::destroy($id);

        return redirect('redes')->with('flash_message', 'rede deleted!');
    }
}
