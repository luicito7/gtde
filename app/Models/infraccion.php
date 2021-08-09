<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infraccion extends Model
{
    use HasFactory;
    public $table = 'papeleta_de_infraccion_infraccion';
    protected $fillable = ['id','papeletaI_id','infraccion_datos_id'];
}
