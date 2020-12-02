<?php

namespace App\Imports;

use App\curriculo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CurriculosImport implements ToModel, WithHeadingRow
{


    public function model(array $row)
    {



        return new curriculo([


            'seccional'     => $row['seccional'],
            'area_conocimiento'    => $row['area_conocimiento'],
            'facultad'     => $row['facultad'],
            'componente'    => $row['componente'],
            'descripcion'     => $row['descripcion'],
            'mes'    => $row['mes'],
            'año'     => $row['año'],
            'responsable'    => $row['responsable'],
            'correo' =>$row['correo'],
            'contacto' =>$row['contacto'],
            
            


        ]);
    }
}
