<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateUserController extends Controller
{

    public function formPersonal(Request $request)
    {
        $request->validate([]);

        $data = session('data', []);

        session()->put('data', array_merge($data, $request->all()));

        return redirect()->route('workData');
    }

    public function formWork(Request $request)
    {
        $data = session('data', []);

        session()->put('data', array_merge($data, $request->all()));

        return redirect()->route('familyData');
    }

    public function formFamily(Request $request)
    {
        $data = session('data', []);

        session()->put('data', array_merge($data, $request->all()));

        return redirect()->route('payData');
    }

    public function create(
        Request $request,
        PersonController $personController,
        ContratoController $contratoController,
        AfiliacionController $afiliacionController,
        DiscapacidadController $discapacidadController,
        LactanciaController $lactanciaController,
        HijosController $hijosController
    ) {

        DB::beginTransaction();

        try {

            session()->put('data', array_merge(session('data', []), $request->all()));

            $data = session('data', []);

            $discap_value = isset($data['discap']) ? $data['discap'] : null;
            $lactan_value = isset($data['lactan']) ? $data['lactan'] : null;

            $person = $personController->person($data);

            $contrato = $contratoController->contrato($data, $person->id);

            $afiliacionController->afiliacion($data, $contrato->id);

            if ($discap_value == 1) {
                $discapacidadController->discapacidad($data, $person->id);
            }

            if ($lactan_value == 1) {
                $lactanciaController->lactancia($data, $person->id);
            }

            if ($data['hijos'] == 1) {
                $hijosController->hijos($data, $person->id);
            }

            DB::commit();

            session()->forget('data');

            return redirect()->route('reportPersonal');
        } catch (\Throwable $e) {
            DB::rollBack();

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
