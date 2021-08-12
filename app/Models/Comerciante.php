<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comerciante extends Model
{
    use HasFactory;
    protected $table = 'abastos';
    protected $fillable = [
        'dni',
        'apepaterno',
        'apematerno',
        'nombres',
        'nombrecomplet',
        'puesto',
        'asociacion',
        'rubro1',
        'rubro2',
        'mercado',
        'direcpuesto',
        'fotopuesto',
        'tipocomer',
        'numpadron',
        'observaciones'
    ];
}
