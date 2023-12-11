<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{

    public function person($data)
    {

        $person = new Person();

        $person->dni = $data['dni'] ?? null;
        $person->apell_pat = $data['apell_pat'] ?? null;
        $person->apell_mat = $data['apell_mat'] ?? null;
        $person->nombre = $data['nombre'] ?? null;
        $person->sexo = $data['sexo'] ?? null;
        $person->ruc = $data['ruc'] ?? null;
        $person->nivel_educ = $data['nivel_educ'] ?? null;
        $person->fech_nac = $data['fech_nac'] ?? null;
        $person->nacionalidad = $data['nacionalidad'] ?? null;

        $person->telefono = $data['telefono'] ?? null;
        $person->email_per = $data['email_per'] ?? null;
        $person->email_lab = $data['email_lab'] ?? null;

        $person->telefono_emerg = $data['telefono_emergencia'] ?? null;

        $person->id_dist_nac = Distrito::where('id_distrito', $data['dist_nac_selected'])->first()->id_distrito;

        $person->est_civ = $data['est_civ'] ?? null;

        $person->id_dist_dom = Distrito::where('id_distrito', $data['dist_dom_selected'])->first()->id_distrito;

        $person->dirc_dom = $data['dire_dom'] ?? null;

        $person->save();

        return $person;
    }
}
