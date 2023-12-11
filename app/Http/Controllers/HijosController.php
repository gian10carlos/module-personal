<?php

namespace App\Http\Controllers;

use App\Models\Hijos;

class HijosController extends Controller
{
    public function hijos($data, $personId)
    {
        $hijos = new Hijos();

        $hijos->num_hijos = $data['num_hijos'] ?? null;

        $hijos->id_person = $personId;

        $hijos->save();
    }
}
