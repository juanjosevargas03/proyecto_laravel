<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PersonasImport;
use App\Imports\ConveniosImport;
use App\Imports\RedesImport;
use App\Imports\CurriculosImport;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Personas;
use App\Convenio;
use App\curriculo;
use App\rede;


class CargarController extends Controller
{
    public function import(Request $request) 
    {
        $file = $request->file('file');

        Excel::import(new PersonasImport, $file);
        
        return back()->with('success', 'importado');
    }
     public function import_conv(Request $request) 
    {
        $file = $request->file('file');

        Excel::import(new ConveniosImport, $file);
        
        return back()->with('success', 'importado');
    }

	public function import_redes(Request $request) 
    {
        $file = $request->file('file');

        Excel::import(new RedesImport, $file);
        
        return back()->with('success', 'importado');
    }

    public function import_curr(Request $request)
    {

    	$file = $request->file('file');

        Excel::import(new CurriculosImport, $file);

        return back()->with('success', 'importado');

	
	}
}
