<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarFormularioRequestEditar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [


             
            'F_nacimiento' => 'required',
            'Nombre' => 'required',
            'Direccion' => 'required',
            'Telefono' => 'required',
            'F_icfes' => 'required',
             'Año' => 'required',
            'Programa' => 'required',
            'Puntaje_icfes' => 'required',
            'Bachillerato' => 'required',
            'Identificacion' => 'required',
              'Tipo_id' => 'required',
            'Año_grado' => 'required',
            'Ciudad' => 'required',
            'Puntaje' => 'required',
            'Opciones_carrera' => 'required',
           
        ];
    }
   
    public function attributes()
    {
        return [

             'F_icfes' => 'Fecha de evaluacion icfes',
              'Año' => 'Año actual',
            'F_nacimiento' => 'Fecha de nacimiento',
            'Comun_verbal' => 'Comunicacion verbal',
            'Comun_no_verbal' => 'Comunicacion no verbal',


        ];
    }

}
