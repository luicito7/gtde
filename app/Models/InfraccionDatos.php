<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfraccionDatos extends Model
{
    use HasFactory;
    public $table = 'infraccion_datos';
    protected $fillable = ['codigo','nombre','multa','costo'];
    

    public function papeletadeinfraccion()
    {
        return $this->belongsToMany(papeletaDeInfraccion::class,"papeleta_de_infraccion_infraccion","infraccionD_id");
    }
}
