<?php

namespace App\Imports;

use App\Convenio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ConveniosImport implements ToModel, WithHeadingRow
{


    public function model(array $row)
    {



        return new Convenio([


            'institucion'     => $row['institucion'],
            'pais'    => $row['pais'],
            'fecha_inicio'     => $row['fecha_inicio'],
            'fecha_finalizacion'    => $row['fecha_finalizacion'],
            'codigo_convenio'     => $row['codigo_convenio'],
            'id_pais'    => $row['id_pais'],
            'estado'     => $row['estado'],
            'vigencia'    => $row['vigencia'],
            'responsable_inicial' =>$row['responsable_inicial'],
            'direccion_correspondencia' =>$row['direccion_correspondencia'],
            'nombre_rector' =>$row['nombre_rector'],
            'contacto_sinu' =>$row['contacto_sinu'],
            
            'programa'     => $row['programa'],
            'objeto'     => $row['objeto'],
            'participacion'     => $row['participacion'],
            'telefono'     => $row['telefono'],
            'email'     => $row['email'],
            


        ]);
    }
}
