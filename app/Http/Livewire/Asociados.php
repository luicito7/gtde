<?php

namespace App\Http\Livewire;

use App\Models\Asociado;
use Livewire\Component;
use App\Models\Persona;

class Asociados extends Component
{
    public $personas,$associations;

    public $estado, $mostrar, $papeletaDeIn, $id_registrar,
      $id_persona,
      $apepaterno,
      $apematerno, 
      $nombres, 
      $namecomplet, 
      $fechanac, 
      $sexo, 
      $direcreal,
      $departamento,
      $provincia,
      $distrito,
      $celprin,
      $email, 
      $estacivil,
      $profesion,
      $grainstruc,
      $ruc,
      $discapac,
      $estadoreg,
      $RegistrarInput,
      $observac;


    public $asociados, 
    $dni,
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
        $this->nombrecomplet = '';
        $this->ubicacion = '';
        $this->asociacion = '';
        $this->rubro = '';
        $this->zona = '';
        $this->numpadron = '';
        $this->observaciones = '';
        $this->id_asociado = '';
    }

    
    public function editar($id)
    {
            $asociado = Asociado::findOrFail($id);
            $this->id_asociado = $id;
            $this->dni = $asociado->dni;        
            $this->nombrecomplet = $asociado->nombrecomplet;
            $this->ubicacion = $asociado->ubicacion;
            $this->asociacion = $asociado->asociacion;
            $this->rubro = $asociado->rubro;
            $this->zona = $asociado->zona;
            $this->numpadron = $asociado->numpadron;
            $this->observaciones = $asociado->observaciones;
            $this->abrirModal();

    }

    public function guardar()
    {
        Asociado::updateOrCreate(['id'=>$this->id_asociado],
            [
                $validation =$this->validate(),
                'dni' => $this->dni,
                'nombrecomplet' => $this->nombrecomplet,
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
        Asociado::find($id)->delete();
    }

    public function detalles($id)
    {
        $asociado = Asociado::find($id);
        $this->id_persona = $id;
        $this->dni = $asociado->dni;
        $this->ubicacion = $asociado->ubicacion;
        $this->asociacion = $asociado->asociacion;
        $this->rubro = $asociado->rubro;
        $this->zona = $asociado->zona;
        $this->numpadron = $asociado->numpadron;
        $this->observaciones = $asociado->observaciones;
        $this->abrirModal1();
    }

    // public function mod()
    // {
    //     Asociado::updateOrCreate(['id'=>$this->id_asociado],
    //         [
                
    //             'dni' => $this->dni ,
    //             'nombrecomplet' => $this->nombres.' '. $this->apepaterno.' '. $this->apematerno ,
    //             'ubicacion'=> $this->ubicacion,
    //             'asociacion'=>$this->asociacion,
    //             'rubro'=>$this->rubro,
    //             'zona'=>$this->zona,
    //             'numpadron'=>$this->numpadron,
    //             'observaciones'=>$this->observaciones,
           
    //         ],);
    //     $this->cerrarModal2();
    //     $this->limpiarCampos();

    // }

}
