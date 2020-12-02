<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCurriculoRequest extends FormRequest
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

            'seccional'=>'required',
            'area_conocimiento'=>'required',
            'facultad'=>'required',
            'componente'=>'required',
            'descripcion'=>'required',
            'mes'=>'required',
            'año'=>'required',
            'responsable'=>'required',
            'correo'=>'required',
            'contacto'=>'required',
            
            




            
        
        ];
    }
}
