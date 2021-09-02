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
    $rubro,
    $zona,
    $numpadron,
    $id_asociado,
    $observaciones;

    protected $rules = [
        'dni' => 'required|max:8|unique:personas,dni',
        'apepaterno' => 'required',
        'apematerno' => 'required',
        'nombres' => 'required',
    ];


    public $modal = false;//crear
    public $modal1 = false;//detalles
    public $modal2 = false;//editar

    public function update($propertyName) 
    {
        $this->validationOnly($propertyName);
    }

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
    //crear
    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }
    //fin crear

    //detalles
    public function abrirModal1()
    {
        $this->modal1 = true;
    }

    public function cerrarModal1()
    {
        $this->modal1 = false;
    }
    //fin detalles

    //inicio editar
    public function abrirModal2()
    {
        $this->modal2 = true;
    }

    public function cerrarModal2()
    {
        $this->modal2 = false;
    }
    //fin editar
    

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

    public function guardar()
    {
        Asociado::updateOrCreate(['id'=>$this->id_asociado],
            [
                $validation =$this->validate(),
                'dni' => $this->dni,
                'apepaterno' => $this->apepaterno,
                'apematerno' => $this->apematerno,
                'nombres' => $this->nombres,
                'nombrecomplet' => $this->nombres.' '. $this->apepaterno.' '. $this->apematerno ,
                'ubicacion' => $this->ubicacion,
                'asociacion' => $this->asociacion,
                'rubro' => $this->rubro,
                'zona' => $this->zona,
                'numpadron' => $this->numpadron,
                'observaciones' => $this->observaciones,
            ],$validation);
        $this->cerrarModal();
        $this->limpiarCampos();
    }

    public function borrar($id)
    {
        //Persona::find($id)->delete();
        $asociado = Asociado::findOrFail($id);
        $asociado -> delete();
        // $this->id_persona = $id;

        // Persona::updateOrCreate(['id'=>$this->id_persona],
        //     [
        //         'estadoreg' => $this->estadoreg = (0),
               
        //     ],);

    }


     public function editar($id)
    {
            $asociado = Asociado::findOrFail($id);
            $this->id_asociado = $id;
            $this->dni = $asociado->dni;        
            $this->apepaterno = $asociado->apepaterno;
            $this->apematerno = $asociado->apematerno;
            $this->nombres = $asociado->nombres;
            $this->nombrecomplet = $asociado->nombrecomplet;
            $this->ubicacion = $asociado->ubicacion;
            $this->asociacion = $asociado->asociacion;
            $this->rubro = $asociado->rubro;
            $this->zona = $asociado->zona;
            $this->numpadron = $asociado->numpadron;
            $this->observaciones = $asociado->observaciones;
            $this->abrirModal2();

    }


    public function mod()
    {
        Asociado::updateOrCreate(['id'=>$this->id_asociado],
            [
                
                'dni' => $this->dni ,
                'apepaterno' => $this->apepaterno,
                'apematerno' => $this->apematerno,
                'nombres' => $this->nombres,
                'nambrecomplet' => $this->nombres.' '. $this->apepaterno.' '. $this->apematerno ,
                'ubicacion'=> $this->ubicacion,
                'asociacion'=>$this->asociacion,
                'rubro'=>$this->rubro,
                'zona'=>$this->zona,
                'numpadron'=>$this->numpadron,
                'observaciones'=>$this->observaciones,
           
            ],);
        $this->cerrarModal2();
        $this->limpiarCampos();

    }

}
