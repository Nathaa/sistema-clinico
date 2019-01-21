<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    public $table = 'citas';
    protected $fillable = [
        'title', 'start', 'end', 'hora_inicio', 'hora_final', 'color', 'expediente_id',
    ];

    public function expediente()
    {
        return $this->belongsTo(Expedientes::class);
    }

    public function scopeStart($query, $start)
    {
        if ($start != '') {
            $query->where('start', $start);
        }
    }
}
