<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateUserController extends Controller
{

    public function formPersonal(Request $request, PersonController $personController, DiscapacidadController $discapacidadController)
    {
        $request->validate([]);

        try {
            if ($request->hasFile('foto')) {

                $person = $personController->person($request);

                $discap_value = isset($request->discap) ? $request->discap : null;
                $discap_value == 1 ? $discapacidadController->discapacidad($request, $person->id) : null;

                return redirect()->route('personalData')->with('success', 'Registro Exitoso');
            } else {
                return redirect()->route('personalData')->with('message', 'Es Obligatorio subir una foto');
            }
        } catch (\Throwable $th) {
            return redirect()->route('personalData')->with('message', 'Error Registro');
        }
    }

    public function formWork(Request $request)
    {
        // Recuperar datos de la sesión
        $data = $request->session()->get('data', []);

        // Fusionar datos del formulario actual con los existentes en la sesión
        $data = array_merge($data, $request->all());

        $person = Person::where('dni', $data['contratoDni'])->first();

        if ($person) {
            $personId = $person->id;
            $data['personId'] = $personId;
        } else {
            //USUARIO NO REGISTRADO
            return redirect()->route('workData')->with('message', 'Usuario No Registrado');
        }

        // Guardar datos actualizados en la sesión
        $request->session()->put('data', $data);

        return redirect()->route('familyData');
    }

    public function formFamily(Request $request)
    {
        // Recuperar datos de la sesión
        $data = $request->session()->get('data', []);

        // Fusionar datos del formulario actual con los existentes en la sesión
        $data = array_merge($data, $request->all());

        // Guardar datos actualizados en la sesión
        $request->session()->put('data', $data);

        return redirect()->route('payData');
    }

    public function create(
        Request $request,
        ContratoController $contratoController,
        AfiliacionController $afiliacionController,
        LactanciaController $lactanciaController,
        HijosController $hijosController,
        TarjetaControlller $tarjetaController
    ) {

        DB::beginTransaction();

        try {

            // Recuperar datos de la sesión
            $data = $request->session()->get('data', []);

            // Fusionar datos del formulario actual con los existentes en la sesión
            $data = array_merge($data, $request->all());

            $lactan_value = isset($data['lactan']) ? $data['lactan'] : null;

            $personId = $data['personId'];

            $contrato = $contratoController->contrato($data, $personId);

            $afiliacionController->afiliacion($data, $contrato->id);

            $tarjetaController->tarjeta($data, $contrato->id);

            $lactan_value == 1 ? $lactanciaController->lactancia($data, $personId) : null;

            $data['hijos'] == 1 ? $hijosController->hijos($data, $personId) : null;

            DB::commit();

            session()->forget('data');

            return redirect()->route('reportPersonal')->with('success', 'Registro Exitoso');
        } catch (\Throwable $e) {
            DB::rollBack();

            return redirect()->route('workData')->with('message', 'Registro Exitoso');
        }
    }
}
