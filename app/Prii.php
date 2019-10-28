<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prii extends Model
{
    protected $table = 'prii';
    protected $primaryKey = 'id';
    //public $incrementing = false;
    public $timestamps = false;


    protected $fillable = [
        'lugar',
        'cliente',
        'um',
        'tipo_explotacion',
        'minerales',
        'latitud',
        'longitud',
        'medicion',
        'profundidad',
        'nivel_agua',
        'nivel_organico'.
        'nivel_roca'.
        'componentes'
    ];

}
