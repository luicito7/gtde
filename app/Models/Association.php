<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $table = 'associations';
    protected $fillable = [
        'nombreasoc',
        'dnirepre',
        'dnideleg',
        'ubicacion',
        'rubroasoc',
        'tipoasoc',
        'dferia',
        'fechaconst',
        'docregist',
        'docconsti',
        'docpadron',
        'observaciones'
    ];
}
