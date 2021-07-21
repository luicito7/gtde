<?php

namespace App\Http\Livewire;

use App\Models\Association;
use Livewire\Component;

class Associations extends Component
{

    //definimos variables
    public $associations, $mostrar1,
    $nombreasoc, 
    $dnirepre,
    $dnideleg, 
    $ubicacion, 
    $rubroasoc, 
    $id_mostrar1,
    $id_association;

    public $modal3 = false; 
    public $modal4 = false; 

    public function render()
    {
        $this->associations = Association::all();
        return view('livewire.associations');
    }

    public function lista()
    {
        $this->limpiarCampos();
        $this->abrirModal3();
    }

    public function abrirModal3()
    {
        $this->modal3 = true;
    }

    public function cerrarModal3()
    {
        $this->modal3 = false;
    }

    public function abrirModal4()
    {
        $this->modal4 = true;
    }

    public function cerrarModal4()
    {
        $this->modal4 = false;
    }

    public function limpiarCampos()
    {
        $this->nombreasoc = '';
        $this->dnirepre = '';
        $this->dnideleg = '';
        $this->ubicacion = '';
        $this->rubroasoc = '';
        $this->id_association = '';
    }


    public function editar($id)
    {
        $association = Association::findOrFail($id);
        $this->id_association = $id;
        $this->nombreasoc = $association->nombreasoc;
        $this->dnirepre = $association->dnirepre;
        $this->dnideleg = $association->dnideleg;
        $this->ubicacion = $association->ubicacion;
        $this->rubroasoc = $association->rubroasoc;
        $this->abrirModal3();

    }

    public function borrar($id)
    {
        Association::find($id)->delete();
    }



    public function guardar()
    {
        Association::updateOrCreate(['id'=>$this->id_association],
            [
                'nombreasoc' => $this->nombreasoc,
                'dnirepre' => $this->dnirepre,
                'dnideleg' => $this->dnideleg,
                'ubicacion' => $this->ubicacion,
                'rubroasoc' => $this->rubroasoc,

            ]);
        $this->cerrarModal3();
        $this->limpiarCampos();

    }


}
