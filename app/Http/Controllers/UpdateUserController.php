<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Cargo;
use App\Models\Contrato;
use App\Models\Person;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    //UPDATE - PERSON
    public function updateDataPerson(Request $request)
    {
        try {

            $person = Person::find($request->input('recipient-person-id'));

            $contrato = Contrato::find($request->input('recipient-contrato-id'));

            $area = Area::where('descripcion', $request->input('recipient-area'))->first();

            $cargo = Cargo::where('descripcion', $request->input('recipient-cargo'))->first();

            $contratoUpdate = [
                'hora_entr' => $request->input('recipient-hora-entrada'),
                'id_area' => $area->id,
                'id_cargo' => $cargo->id
            ];

            $personUpdate = [
                'nombre' => $request->input('recipient-name'),
                'telefono' => $request->input('recipient-telefono')
            ];

            $contrato->update($contratoUpdate);

            $person->update($personUpdate);

            // Puedes devolver una respuesta al cliente si es necesario
            return redirect()->route('reportPersonal');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
