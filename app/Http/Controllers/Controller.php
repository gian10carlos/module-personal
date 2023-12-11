<?php

namespace App\Http\Controllers;

use App\Models\Area;
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

    public function login() {
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
    public function asistencia()
    {

        return view('asistencia');
    }
    public function pago()
    {

        return view('pago');
    }
    public function reportPago()
    {

        return view('reportPago');
    }
}
