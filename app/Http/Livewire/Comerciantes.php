<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comerciante;
use App\Models\Persona;

class Comerciantes extends Component
{
    public $comerciantes, 
    $dni,
    $apepaterno,
    $apematerno,
    $nombres,
    $nombrecomplet, 
    $puesto,
    $asociacion,
    $rubro1,
    $rubro2,
    $mercado,
    $direcpuesto,
    $fotopuesto,
    $tipocomer,
    $numpadron,
    $observaciones,
    $id_comerciante;

    protected $rules = [
        'dni' => 'required|max:8|unique:personas,dni',
        'apepaterno' => 'required',
        'apematerno' => 'required',
        'nombres' => 'required',
    ];

    public $modal = false;

    public function update($propertyName) 
    {
        $this->validationOnly($propertyName);
    }

    public function render()
    {
        $this->comerciantes = Comerciante::all();
        return view('livewire.comerciantes');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->dni = '';
        $this->apepaterno = '';
        $this->apematerno = '';
        $this->nombres = '';
        $this->nombrecomplet = '';
        $this->puesto = '';
        $this->asociacion = '';
        $this->rubro1 = '';
        $this->rubro2 = '';
        $this->mercado = '';
        $this->direcpuesto = '';
        $this->fotopuesto = '';
        $this->tipocomer = '';
        $this->numpadron = '';
        $this->observaciones = '';
        
    }

    public function guardar()
    {
        Comerciante::updateOrCreate(['id'=>$this->id_comerciante],
            [
                $validation =$this->validate(),
                'dni' => $this->dni,
                'apepaterno' => $this->apepaterno,
                'apematerno' => $this->apematerno,
                'nombres' => $this->nombres,
                'nombrecomplet' => $this->nombres.' '. $this->apepaterno.' '. $this->apematerno ,
                'puesto' => $this->puesto,
                'asociacion' => $this->asociacion,
                'rubro1' => $this->rubro1,
                'rubro2' => $this->rubro2,
                'mercado' => $this->mercado,
                'direcpuesto' => $this->direcpuesto,
                'fotopuesto' => $this->fotopuesto,
                'tipocomer' => $this->tipocomer,
                'numpadron' => $this->numpadron,
                'observaciones' => $this->observaciones,
            ],$validation);
        $this->cerrarModal();
        $this->limpiarCampos();
    }

}
