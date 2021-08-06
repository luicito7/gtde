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
    $tipoasoc,
    $dferia,
    $fechaconst,
    $docregist,
    $docconsti,
    $docpadron,
    $observacion,
    $id_mostrar1,
    $id_association;

    protected $rules = [
        'dnirepre' => 'required|max:8|unique:associations,dnirepre',
        'dnideleg' => 'required',
        'nombreasoc' => 'required',
        'ubicacion' => 'required',
        'rubroasoc' => 'required',

    ];

    protected $messages = [
        'dnirepre.required' => 'El DNI es obligatorio',
        //'email.email' => 'The Email Address format is not valid.',
        'dnirepre.unique' => 'El Dni ya existe',
    ];

    public function update($propertyName) 
    {
        $this->validationOnly($propertyName);
    }

    public $modal3 = false; 
    public $modal4 = false; 

    public function render()
    {
        $this->associations = Association::all();
        return view('livewire.associations');
    }

    public function crear1()
    {
        $this->limpiarCampos();
        $this->abrirModal3();
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
        $this->tipoasoc = '';
        $this->dferia = '';
        $this->fechaconst = '';
        $this->docregist = '';
        $this->docconsti = '';
        $this->docpadron = '';
        $this->observacion = '';
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
        $this->tipoasoc = $association->tipoasoc;
        $this->dferia = $association->dferia;
        $this->fechaconst = $association->fechaconst;
        $this->docregist = $association->docregist;
        $this->docconsti = $association->docconsti;
        $this->docpadron = $association->docpadron;
        $this->observacion = $association->observacion;
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
                $validation =$this->validate(),
                'nombreasoc' => $this->nombreasoc,
                'dnirepre' => $this->dnirepre,
                'dnideleg' => $this->dnideleg,
                'ubicacion' => $this->ubicacion,
                'rubroasoc' => $this->rubroasoc,
                'tipoasoc' => $this->tipoasoc,
                'dferia' => $this->dferia,
                'fechaconst' => $this->fechaconst,
                'docregist' => $this->docregist,
                'docconsti' => $this->docconsti,
                'docpadron' => $this->docpadron,
                'observacion' => $this->observacion,
            ],$validation);
        $this->cerrarModal3();
        $this->limpiarCampos();

    }


}
