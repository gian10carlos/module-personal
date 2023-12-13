<?php

namespace App\Http\Controllers;

use App\Models\Discapacidad;
use Illuminate\Http\Request;

class DiscapacidadController extends Controller
{
    public function discapacidad(Request $request, $personId)
    {

        $discapacidad = new Discapacidad();

        $discapacidad->descripcion = $request['discapacidadNombre'] ?? null;
        $discapacidad->entidad = $request['entidad'] ?? null;
        $discapacidad->num_conadis = $request['num_conadis'] ?? null;
        $discapacidad->fech_emi_con = $request['fech_emi_con'] ?? null;
        $discapacidad->grad_discap = $request['grad_discap'] ?? null;

        $discapacidad->id_person = $personId;

        $discapacidad->save();
    }
}
