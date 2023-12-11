<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    protected $table = 'contrato';

    protected $fillable = [
        'hora_entr',
        // Agrega aquí otras columnas que desees permitir en la asignación masiva
    ];
}
