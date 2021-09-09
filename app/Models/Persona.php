<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Persona extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'personas';
    protected $fillable = [
        'dni',
        'apepaterno',
        'apematerno',
        'nombres',
        'namecomplet',
        'fechanac',
        'sexo',
        'direcreal',
        'departamento',
        'provincia',
        'distrito',
        'celprin',
        'email',
        'estacivil',
        'profesion',
        'grainstruc',
        'ruc',
        'discapac',
        'estadoreg',
        'observac'
    ];
}
