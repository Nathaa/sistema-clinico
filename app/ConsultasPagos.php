<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultasPagos extends Model
{
    protected $fillable = [
        'fechaInicio', 'fechaFinal',
    ];
}
