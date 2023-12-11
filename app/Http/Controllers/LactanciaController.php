<?php

namespace App\Http\Controllers;

use App\Models\Lactancia;
use Illuminate\Http\Request;

class LactanciaController extends Controller
{
    public function lactancia(Request $request, $personId)
    {
        $data = $request->input('data');

        $lactancia = new Lactancia();

        $lactancia->fech_inic_lact = $data['fech_inic_lact'] ?? null;
        $lactancia->fech_fin_lact = $data['fech_fin_lact'] ?? null;
        $lactancia->id = $personId;

        $lactancia->save();
    }
}
