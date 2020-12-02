<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarFormularioRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [


            
            'F_nacimiento' => 'required',
            'Nombre' => 'required',
            'Año' => 'required',
            'Direccion' => 'required',
            'Telefono' => 'required',
            'F_icfes' => 'required',
             'Identificacion' => 'required',
              'Tipo_id' => 'required',
            'Programa' => 'required',
            'Puntaje_icfes' => 'required',
            'Bachillerato' => 'required',
            
            'Año_grado' => 'required',
           
            'Ciudad' => 'required',

           
            'Opciones_carrera' => 'required',
            'Autoconfianza' => 'required',
            'Compromiso' => 'required',
            'Expectativas' => 'required',
            'Intereses' => 'required',
            'i1' => 'required',
            'i2' => 'required',
            'i3' => 'required',
            'i4' => 'required',
            'i5' => 'required',
            'i6' => 'required',
            'i7' => 'required',
            'i8' => 'required',
            'i9' => 'required',
            'i10' => 'required',
            'i11' => 'required',
            'i12' => 'required',
            
            


        ];
    }
  
    public function attributes()
    {
        return [

            
            
            'F_icfes' => 'Fecha de evaluacion icfes',
            'F_nacimiento' => 'Fecha de nacimiento',
            'Comun_verbal' => 'Comunicacion verbal',
            'Comun_no_verbal' => 'Comunicacion no verbal',
             'Año' => 'Año actual',
             'i1' => 'Item de cuestionario',
            'i2' => 'Item de cuestionario',
            'i3' => 'Item de cuestionario',
            'i4' => 'Item de cuestionario',
            'i5' => 'Item de cuestionario',
            'i6' => 'Item de cuestionario',
            'i7' => 'Item de cuestionario',
            'i8' => 'Item de cuestionario',
            'i9' => 'Item de cuestionario',
            'i10' => 'Item de cuestionario',
            'i11' => 'Item de cuestionario',
            'i12' => 'Item de cuestionario',
            


        ];
    }
}
