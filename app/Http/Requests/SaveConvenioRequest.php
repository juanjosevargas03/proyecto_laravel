<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveConvenioRequest extends FormRequest
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

            'institucion'=>'required',
            'pais'=>'required',
            'fecha_inicio'=>'required',
            'fecha_finalizacion'=>'required',
            'estado'=>'required',
            'codigo_convenio'=>'required',
            'id_pais'=>'required',
            'vigencia'=>'required',
            'responsable_inicial'=>'required',
            'direccion_correspondencia'=>'required',
            'nombre_rector'=>'required',
            'contacto_sinu'=>'required',
            




            
        
        ];
    }
}
