<?php

namespace App\Imports;

use App\Personas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PersonasImport implements ToModel, WithHeadingRow
{


    public function model(array $row)
    {



        return new Personas([


            'Seccional'     => $row['seccional'],
            'Fondo'    => $row['fondo'],
            'Genero'     => $row['genero'],
            'Nombre'    => $row['nombres'],
            'Tipo_ID'     => $row['tipo_id'],
            'Numero_ID'    => $row['numero_id'],
            'PIP'     => $row['pip'],
            'Correo'    => $row['correo'],
            'Financiacion_Nacional' => (int) $row['financiacion_nacional'],
            'ValorAsumidoHotelesAlimentacion' => (int) $row['valor_asumido_por_unisinu_por_hoteles_alimentacion_y_transporte'],
            'ValorAsumidoInscripciones' => (int) $row['valor_asumido_por_unisinu_por_concepto_de_inscripciones'],
            'ValorTiquetes' => (int) $row['valor_de_tiquetes'],
            'ValorMensualHospedaje' => (int) $row['valor_mensual_de_hospedaje'],
            'ValorTotalAsumido' => (int) $row['valor_total_asumido_por_unisinu'],
            'TasaDeCambioFViaje' => (int) $row['tasa_de_cambio_a_la_fecha_del_viaje'],
            'ValorTotalAsumidoUSD' => (int) $row['valor_total_en_usd_asumido_por_unisinu'],
            'Financiacion_Internacional' => (int) $row['financiacion_internacional'],
            'Soporte'     => $row['soportes'],
            'Programa'    => $row['escuela'],
            'Acreditacion'     => $row['acreditacion'],
            'Institucion'    => $row['institucion'],
            'Vinculacion'     => $row['vinculacion'],
            'Tipom'    => $row['tipo_movilidad'],
            'Asist'     => $row['as1st_card'],
            'Souvenirs'    => $row['souvenirs'],
            'Categoria'     => $row['categoria_de_movilidad'],
            'Modalidad'    => $row['modalidad'],
            'O_Movilidad'     => $row['objetivo_de_movilidad'],
            'Evento'    => $row['evento'],
            'Pais'     => $row['pais'],
            'F_Inicio'    => $row['fecha_de_inicio'],
            'F_Fin'     => $row['fecha_de_terminacion'],
            'Duracion'    => $row['duracion'],
            'Año'     => $row['year'],
            'Observaciones'    => $row['observaciones'],
            'Semestre'    => $row['semestre'],


        ]);
    }
}
