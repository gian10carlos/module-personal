<?php

namespace App\Http\Controllers;

use App\Models\Tarjeta;
use Illuminate\Http\Request;

class TarjetaControlller extends Controller
{
    public function tarjeta($data, $contratoId) {
        
        $tarjeta = new Tarjeta();

        $tarjeta->nombre_titular = $data['nom_titu_tarj'];
        $tarjeta->num_tarjeta = $data['num_tarj'];
        $tarjeta->expiracion = $data['expiracion'];
        $tarjeta->id_contrato = $contratoId;

        $tarjeta->save();
    }
}
