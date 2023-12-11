<?php

namespace App\Http\Controllers;

use App\Models\Hijos;
use Illuminate\Http\Request;

class HijosController extends Controller
{
    public function hijos(Request $request, $personId)
    {
        $data = $request->input('data');

        if($data['hijos'] == 1){
            $hijos = new Hijos();
            
            $hijos->num_hijos = $data['num_hijos'] ?? null;

            $hijos->id = $personId;
    
            $hijos->save();
        }
    }
}
