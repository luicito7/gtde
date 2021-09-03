<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comerciante extends Model
{
    use HasFactory;
    protected $table = 'comerciantes';
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
        'dimpuesto',
        'fotopuesto',
        'tipocomer',
        'numpadron',
        'observaciones'
    ];
}
