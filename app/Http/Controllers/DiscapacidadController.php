<?php

namespace App\Http\Controllers;

use App\Models\Discapacidad;
use Illuminate\Http\Request;

class DiscapacidadController extends Controller
{
    public function discapacidad($data, $personId)
    {

        $discapacidad = new Discapacidad();

        $discapacidad->descripcion = $data['discapacidadNombre'] ?? null;
        $discapacidad->entidad = $data['entidad'] ?? null;
        $discapacidad->num_conadis = $data['num_conadis'] ?? null;
        $discapacidad->fech_emi_con = $data['fech_emi_con'] ?? null;
        $discapacidad->grad_discap = $data['grad_discap'] ?? null;

        $discapacidad->id_person = $personId;

        $discapacidad->save();
    }
}
