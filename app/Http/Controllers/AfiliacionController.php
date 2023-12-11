<?php

namespace App\Http\Controllers;

use App\Models\Afiliacion;
use Illuminate\Http\Request;

class AfiliacionController extends Controller
{
    public function afiliacion($data, $contratoId)
    {
        $afiliacion = new Afiliacion();

        $afiliacion->reg_lab = $data['reg_lab'] ?? null;
        $afiliacion->sctr_salud = $data['sctr_salud'] ?? null;
        $afiliacion->nom_eps = $data['nom_eps'] ?? null;
        $afiliacion->sit_eps = $data['sit_eps'] ?? null;

        $afiliacion->id_contrato = $contratoId;

        $afiliacion->save();
    }
}
