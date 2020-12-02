<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curriculo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curriculos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['seccional', 'area_conocimiento', 'facultad', 'componente', 'descripcion', 'mes', 'año', 'responsable', 'correo', 'contacto'];

    
}
