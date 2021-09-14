<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asociado extends Model
{
    use HasFactory;
    protected $table = 'asociados';
    protected $fillable = [
        'dniaso',
        'nombrecomplet',
        'ubicacion',
        'asociacion',
        'rubro',
        'zona',
        'numpadron',
        'observaciones'
    ];
}
