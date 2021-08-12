<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asociado extends Model
{
    use HasFactory;
    protected $table = 'ambulatorio';
    protected $fillable = [
        'dni',
        'apepaterno',
        'apematerno',
        'nombres',
        'nombrecomplet',
        'ubicacion',
        'asociacion',
        'rubro1',
        'zona',
        'numpadron',
        'observaciones'
    ];
}
