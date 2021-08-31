<?php

namespace App\Http\Livewire;

use App\Models\Asociado;
use Livewire\Component;
use App\Models\Persona;

class Asociados extends Component
{
    public $asociados, 
    $dni,
    $apepaterno,
    $apematerno,
    $nombres,
    $nombrecomplet, 
    $ubicacion,
    $asociacion,
    $rubro1,
    $zona,
    $numpadron,
    $observaciones;

    public $modal = false;

    public function render()
    {
        $this->asociados = Asociado::all();
        return view('livewire.asociados');
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
        $this->ubicacion = '';
        $this->asociacion = '';
        $this->rubro = '';
        $this->zona = '';
        $this->numpadron = '';
        $this->observaciones = '';
    }

}