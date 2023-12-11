<?php

namespace App\Http\Controllers;

use App\Models\Lactancia;

class LactanciaController extends Controller
{
    public function lactancia($data, $personId)
    {

        $lactancia = new Lactancia();

        $lactancia->fech_inic_lact = $data['fech_inic_lact'] ?? null;
        $lactancia->fech_fin_lact = $data['fech_fin_lact'] ?? null;
        $lactancia->id_person = $personId;

        $lactancia->save();
    }
}
