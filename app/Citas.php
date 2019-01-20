<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    public $table = 'citas';
    protected $fillable = [
        'title', 'start', 'end', 'hora_inicio','hora_final','color','expediente_id',
    ];

    public $timestamps = false;
}
