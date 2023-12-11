<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Cargo;
use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{

    public $timestamps = false;

    public function contrato($data, $personId)
    {
        // $data = $request->input('data');

        $contrato = new Contrato();

        $contrato->tipo_trabaj = $data['tipo_trabaj'] ?? null;
        $contrato->cond_lab = $data['cond_lab'] ?? null;
        $contrato->categ_remun = $data['categ_remun'] ?? null;
        $contrato->ocupacion = $data['ocupacion'] ?? null;
        $contrato->turno = $data['turno'] ?? null;
        $contrato->local_ubic = $data['local_ubic'] ?? null;
        $contrato->fech_cont = $data['fech_cont'] ?? null;
        $contrato->fech_inic = $data['fech_inic'] ?? null;
        $contrato->fech_fin = $data['fech_fin'] ?? null;
        $contrato->hora_entr = $data['hora_entr'] ?? null;
        $contrato->hora_sali = $data['hora_sali'] ?? null;
        $contrato->salario = $data['salario']??null;

        $contrato->id_person = $personId;

        $contrato->id_area = Area::where('id', $data['ocupacion'])->first()->id;

        $contrato->id_cargo = Cargo::where('id', $data['tipo_trabaj'])->first()->id;

        // $contrato->nom_titu_tarj = $data['nom_titu_tarj']??null;
        // $contrato->num_tarj = $data['num_tarj']??null;
        // $contrato->expiracion = $data['expiracion']??null;
        // $contrato->cvv = $data['cvv']??null;

        
        $contrato->save();

        return $contrato;
    }
}
