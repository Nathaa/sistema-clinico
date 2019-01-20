<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    public $table = 'citas';
    protected $fillable = [
        'descripcion', 'fechai_nicio', 'fecha_final', 'color',
    ];

    public $timestamps = false;
}
