<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Asistencia;
use App\Models\AsistenciaInp;
use App\Models\AsistenciaOut;
use App\Models\Cargo;
use App\Models\Contrato;
use Illuminate\Http\Request;

use App\Models\Distrito;
use App\Models\Person;
use App\Models\Provincia;
use App\Models\Region;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login()
    {
        return view('login');
    }

    public function personalData()
    {
        $distritos = Distrito::all();
        $provincias = Provincia::All();
        $regiones = Region::all();

        return view('register.personalData', ['distritos' => $distritos, 'provincias' => $provincias, 'regiones' => $regiones]);
    }

    public function getProvincias($regionId)
    {
        $provincias = Provincia::where('id_region', $regionId)->get();
        return response()->json($provincias);
    }

    public function getDistritos($provinciaId)
    {
        $distritos = Distrito::where('id_provincia', $provinciaId)->get();
        return response()->json($distritos);
    }

    public function workData()
    {

        $areas = Area::all();
        $cargos = Cargo::all();

        return view('register.workData', ['areas' => $areas, 'cargos' => $cargos]);
    }
    public function familyData()
    {

        return view('register.familyData');
    }
    public function payData()
    {

        return view('register.payData');
    }
    public function reportPersonal()
    {

        $dataReportPerson = DB::select('CALL GetReportPerson()');

        return view('reportPersonal', ['dataPerson' => $dataReportPerson]);
    }

    public function registroAsistencia()
    {
        // Obtener la fecha y hora actual con Carbon
        $now = now();

        // Obtener solo la fecha actual (sin la hora)
        $currentDate = $now->toDateString();

        // Obtener solo la hora actual (sin la fecha)
        $currentTime = $now->toTimeString();

        return view('registroAsistencia', ['date' => $currentDate, 'time' => $currentTime]);
    }

    public function asistencia()
    {
        $dataReportPerson = DB::select('CALL GetAsistencias()');

        return view('reportAsistencia', ['dataReportPerson' => $dataReportPerson]);
    }
    public function pago()
    {
        return view('pago');
    }
    public function reportPago()
    {

        $peopleAsistencia = DB::select('CALL GetHoursPerson()');

        return view('reportPago', ['dataPay' => $peopleAsistencia]);
    }
    public function destroyPerson(Person $id)
    {
        $id->delete();
        return redirect()->route('reportPersonal');
    }

    // ASISTENCIA
    public function registerAsistencia(Request $request)
    {
        try {
            $now = now();

            $currentDate = $now->toDateString();

            $currentTime = $now->toTimeString();

            $asistenciaInp = new AsistenciaInp();
            $asistenciaOut = new AsistenciaOut();

            $person = Person::where('dni', $request->dniAsistencia)->first();
            $personId = $person->id;

            // ENTRADA
            if ($request->typeAsistencia == 1) {
                $asistenciaInp->fechaEntrada = $currentDate;
                $asistenciaInp->horaEntrada = $currentTime;
                $asistenciaInp->id_person = $personId;

                $asistenciaInp->save();

                return redirect()->route('registroAsistencia')->with('success', 'Asistencia Entrada Registrada');
            } else {
                // SALIDA
                if ($request->typeAsistencia == 2) {

                    $date = AsistenciaInp::where('fechaEntrada', $currentDate)->first();
                    $dateId = $date->id;

                    $asistenciaOut->fechaSalida = $currentDate;
                    $asistenciaOut->horaSalida = $currentTime;
                    $asistenciaOut->id_entrada = $dateId;

                    $asistenciaOut->save();

                    return redirect()->route('registroAsistencia')->with('success', 'Asistencia Salida Registrada');
                }
            }
        } catch (\Throwable $th) {
            return redirect()->route('registroAsistencia')->with('message', 'Asistencia NO registrada');
        }
    }
}
