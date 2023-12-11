<?php

namespace App\Http\Controllers;

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

            $contratoUpdate = [
                'hora_entr' => $request->input('recipient-hora-entrada')
            ];

            $personUpdate = [
                'nombre' => $request->input('recipient-name')
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
