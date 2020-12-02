<?php

namespace App\Http\Controllers;

use App\Personas;
use App\User;
use App\idioma;
use DB;
use App\Http\Requests\ValidarFormularioRequest;
use App\Http\Requests\ValidarFormularioRequestEditar;

use Illuminate\Http\Request;

class PersonasController extends Controller
{
  
    public function index(Request $request)
    {

        $Nombre =      $request->get('Nombre');
        $Vinculacion = $request->get('Vinculacion');
        $Programa =    $request->get('Programa');
        

        $datos['personas']=Personas::Nombre($Nombre)
       
        ->Vinculacion($Vinculacion)
        ->Programa($Programa)
        ->paginate(10);
        
        
        
        $usuarios= User::paginate(5);
        
        return view('home', $datos)->with("usuarios" , $usuarios);
        
        }

   
    public function create()
    {
        return view('form_Agregar');
    }

 
    public function store(ValidarFormularioRequest $request)
    {
         $identificacion =      $request->get('Identificacion');
         $a =      $request->get('Autoconfianza');
         $b =      $request->get('Compromiso');
         $c =      $request->get('Expectativas');
         $d =      $request->get('Intereses');
         $idiom =      $request->get('idiomas');
        $acum = 0;
        for ($i=1; $i < 13; $i++) { 
             $acum += $request->get('i'.strval($i));
        }

       $Puntaje = $a + $b + $c + $d + $acum;

        if ($Puntaje >= 65) {
            $Admision = 'Aceptado';
        }elseif ($Puntaje > 15) {
            $Admision = 'Aceptado con reserva';
        }else{
             $Admision = 'No Aceptado';
        }

        $datos = request()->except('_token','i1','i2','i3','i4','i5','i6','i7','i8','i9','i10','i11','i12','idiomas');
        $datos2 = array('Puntaje' => $Puntaje,'Admision' => $Admision);

        $datosPersonas = array_merge($datos,$datos2);
        
        Personas::insert($datosPersonas);

         $p = Personas::where('Identificacion','=',$identificacion)->first();

         
         for ($j=0;$j<count($idiom);$j++) { 
            $idioma = new idioma();
            $idioma->Nombre = $idiom[$j];
            $idioma->personas_id = $p->id;
            $idioma->save();


         }

        

        return redirect('/')->with('Mensaje','Persona Agregado con éxito');
 

    }


    public function show(Personas $personas)
    {
        //
    }

 public function pdf(Request $request)
    {

        $id_persona = $request->get('id');

        $persona = Personas::find($id_persona);

        $pdf = \PDF::loadView('personas.Pdf', compact('persona'));

     return $pdf->download('personas.Pdf.pdf');

       
    }

     public function report()
    {

        $c_aspirantes= count(Personas::all());

        $c_programa= DB::select('SELECT  Programa,  count(Programa) as cantidad From personas Group By 
            Programa' );

        $c_año= DB::select('SELECT  Año,  count(Año) as cantidad From personas Group By 
            Año' );

        $pdf = \PDF::loadView('report', compact('c_programa','c_año','c_aspirantes'));

        
        return $pdf->download('reporte.pdf');

        
    }

    public function edit($id)
    {
        $persona = Personas::find($id);

        return view('edit')->with('persona', $persona);
    }

 
    public function update(ValidarFormularioRequestEditar $request,  $id)
    {
        //
        $Puntaje = $request->get('Puntaje');
         $idiom =      $request->get('idiomas');

         if ($Puntaje >= 65) {
            $Admision = 'Aceptado';
        }elseif ($Puntaje > 15) {
            $Admision = 'Aceptado con reserva';
        }else{
             $Admision = 'No Aceptado';
        }

        $datos = request()->except('_token', '_method','idiomas');
        $datos2 = array('Admision' => $Admision);

        $datosPersonas = array_merge($datos,$datos2);

        Personas::where('id','=',$id)->update($datosPersonas);
        $p = Personas::find($id);
        
        foreach ($p->idiomas as $i){
            idioma::destroy($i->id);
        }

        for ($j=0;$j<count($idiom);$j++) { 
            $idioma = new idioma();
            $idioma->Nombre = $idiom[$j];
            $idioma->personas_id = $id;
            $idioma->save();


         }

        return redirect('/');
    }

 
    public function destroy($id)
    {
        User::destroy($id);
        Personas::destroy($id);

        return redirect('/');

    }
}
