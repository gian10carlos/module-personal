<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{

    public function person(Request $request)
    {
        $person = new Person();

        $person->dni = $request['dni'] ?? null;

        $person->apell_pat = $request['apell_pat'] ?? null;
        $person->apell_mat = $request['apell_mat'] ?? null;
        $person->nombre = $request['nombre'] ?? null;
        $person->sexo = $request['sexo'] ?? null;
        $person->ruc = $request['ruc'] ?? null;
        $person->nivel_educ = $request['nivel_educ'] ?? null;
        $person->fech_nac = $request['fech_nac'] ?? null;
        $person->nacionalidad = $request['nacionalidad'] ?? null;

        $person->telefono = $request['telefono'] ?? null;
        $person->email_per = $request['email_per'] ?? null;
        $person->email_lab = $request['email_lab'] ?? null;

        $person->telefono_emerg = $request['telefono_emergencia'] ?? null;

        $person->id_dist_nac = Distrito::where('id_distrito', $request['dist_nac_selected'])->first()->id_distrito;

        $person->est_civ = $request['est_civ'] ?? null;

        $person->id_dist_dom = Distrito::where('id_distrito', $request['dist_dom_selected'])->first()->id_distrito;

        $person->dirc_dom = $request['dire_dom'] ?? null;

        $file = $request->file('foto');
        $destination = 'images/profile/';
        $filename  = time() . '-' . $file->getClientOriginalName();
        $uploadsuccess = $request->file('foto')->move($destination, $filename);

        $person->foto = $destination . $filename;

        $person->save();

        return $person;
    }
}
