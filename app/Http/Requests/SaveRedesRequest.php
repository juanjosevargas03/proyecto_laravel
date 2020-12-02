<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveRedesRequest extends FormRequest
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

            'unidad'=>'required',
            'programa'=>'required',
            'asociacion'=>'required',
            'ubicacion'=>'required',
            'objeto'=>'required',
            'costo_membresia'=>'required',
            'periodicidad_pago'=>'required',
            'fecha_vinculacion'=>'required',
            'estado_vinculacion'=>'required',
            'actividad_realizada'=>'required',
            'fecha_actividad'=>'required',
            'num_participantes'=>'required',
            'impacto_actividad'=>'required',
            'responsable_unisinu'=>'required',
            'pagina_web'=>'required',
            'observaciones'=>'required',

            




            
        
        ];
    }
}
