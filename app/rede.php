<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rede extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'redes';

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
    protected $fillable = ['unidad', 'programa', 'asociacion', 'ubicacion', 'objeto', 'costo_membresia', 'periodicidad_pago', 'fecha_vinculacion', 'estado_vinculacion', 'actividad_realizada', 'fecha_actividad', 'num_participantes', 'impacto_actividad', 'responsable_unisinu', 'pagina_web', 'observaciones'];

    
}
