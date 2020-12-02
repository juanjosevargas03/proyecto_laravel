<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    
    protected $table='convenios';
    protected $fillable = ['institucion', 'pais', 'fecha_inicio', 'fecha_finalizacion', 'codigo_convenio', 'id_pais', 'estado', 'vigencia', 'responsable_inicial', 'direccion_correspondencia', 
    'nombre_rector', 'contacto_sinu','programa','objeto','participacion','telefono','email'];

}
