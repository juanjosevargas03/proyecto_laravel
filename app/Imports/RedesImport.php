<?php

namespace App\Imports;

use App\rede;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RedesImport implements ToModel, WithHeadingRow
{


    public function model(array $row)
    {



        return new rede([


            'unidad'     => $row['unidad'],
            'programa'    => $row['programa'],
            'asociacion'     => $row['asociacion'],
            'ubicacion'    => $row['ubicacion'],
            'objeto'     => $row['objeto'],
            'costo_membresia'    => $row['costo_membresia'],
            'periodicidad_pago'     => $row['periodicidad_pago'],
            'fecha_vinculacion'    => $row['fecha_vinculacion'],
            'estado_vinculacion' =>$row['estado_vinculacion'],
            'actividad_realizada' =>$row['actividad_realizada'],
            'fecha_actividad' =>$row['fecha_actividad'],
            'num_participantes' =>$row['num_participantes'],
            'impacto_actividad' =>$row['impacto_actividad'],
            'responsable_unisinu' =>$row['responsable_unisinu'],
            'pagina_web' =>$row['pagina_web'],
            'observaciones' =>$row['observaciones'],


            


        ]);
    }
}
