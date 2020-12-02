<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{

    public function idiomas()
    {
        return $this->hasMany('App\idioma');
    }

    

    protected $fillable = [
         'Nombre', 'Programa','Identificacion','Tipo_id

    ', 'F_nacimiento','Año', 'Direccion', 'Telefono','Puntaje_icfes','Ciudad','F_icfes', 'N_madre','N_padre','N_hermano','Bachillerato','Año_grado','Estudios_adicionales','Opciones_carrera','Autoconfianza','Compromiso','Expectativas','Intereses','Puntaje','Admision','Ocup_madre','Ocup_padre','Ocup_hermano'];


    public function ScopeNombre($query, $Nombre)
    {
        if ($Nombre) {
        return $query->where ('Nombre', 'LIKE', "%$Nombre%");
        }
    }

    public function ScopeVinculacion($query, $Vinculacion)
    {
        if ($Vinculacion) {
        return $query->where ('Vinculacion', 'LIKE', "%$Vinculacion%");
        }
    }

    public function ScopePrograma($query, $Programa)
    {
        if ($Programa) {
        return $query->where ('Programa', 'LIKE', "%$Programa%");
        }
    }



}
