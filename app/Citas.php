<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    public $table = 'citas';
    protected $fillable = [
        'descripcion', 'fecha', 'hora', 'expediente_id',
    ];
}
