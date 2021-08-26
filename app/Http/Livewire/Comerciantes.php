<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comerciante;
use App\Models\Persona;

class Comerciantes extends Component
{
    public $comerciantes, 
    $dni,
    // $apepaterno,
    // $apematerno,
    $nombres,
    //$nombrecomplet, 
    $puesto;
    // $asociacion,
    // $rubro1,
    // $rubro2,
    // $mercado,
    // $direcpuesto,
    // $fotopuesto,
    // $tipocomer,
    // $numpadron,
    // $observaciones;

    public $modal = false;

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
        //$this->apepaterno = '';
        //$this->apematerno = '';
        $this->nombres = '';
        //$this->nombrecomplet = '';
        $this->puesto = '';
    }



}
