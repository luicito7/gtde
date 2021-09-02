<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Persona;
use Livewire\WithPagination;

class Personas extends Component
{
    //definimos variables
    public
     $dni, 
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
     $observac,
     $id_mostrar,
     $id_persona,
     $search = '',
     $perPage = '10';

     protected $rules = [
        'dni' => 'required|max:8|unique:personas,dni',
        'apepaterno' => 'required',
        'apematerno' => 'required',
        'nombres' => 'required',
    ];

    protected $messages = [
        'dni.required' => 'El DNI es obligatorio',
        //'email.email' => 'The Email Address format is not valid.',
        'dni.unique' => 'El Dni ya existe',
    ];

    public function update($propertyName) 
    {
        $this->validationOnly($propertyName);
    }
     
    public $modal = false; //crear
    public $modal1 = false;//detalles 
    public $modal2 = false; //editar

    protected $queryString = [
        'search'=>['except' => ''],
        'perPage'    
    ];

    use WithPagination;
    public function render()
    {
        // $personas = Persona::where('id_persona',auth()->personas()->id)
        //     ->paginate(10);    
        $this->personas = Persona::all();

        return view('livewire.personas', [
            'personas' => Persona::where('dni', 'LIKE', "%{$this->search}%")
            ->orWhere(Persona::raw("CONCAT(`nombres`, ' ' ,`apepaterno`, ' ' ,`apematerno`)"), 'like', '%' . $this->search . '%')

                ->paginate($this ->perPage)
        ]);
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
    //detalles
    public function abrirModal1()
    {
        $this->modal1 = true;
    }

    public function cerrarModal1()
    {
        $this->modal1 = false;
    }
    
    //modal editar
    public function abrirModal2()
    {
        $this->modal2 = true;
    }

    public function cerrarModal2()
    {
        $this->modal2 = false;
    }
    //fin modal editar

    public function limpiarCampos()
    {
        $this->dni = '';
        $this->apepaterno = '';
        $this->apematerno = '';
        $this->nombres = '';
        $this->namecomplet = '';
        $this->fechanac = '';
        $this->sexo = '';
        $this->direcreal = '';
        $this->departamento = '';
        $this->provincia = '';
        $this->distrito = '';
        $this->celprin = '';
        $this->email = '';
        $this->estacivil = '';
        $this->profesion = '';
        $this->grainstruc = '';
        $this->ruc = '';
        $this->discapac = '';
        $this->observac = '';
        $this->id_persona = '';
    }

    public function editar($id)
    {
        $persona = Persona::findOrFail($id);
        $this->id_persona = $id;
        $this->dni = $persona->dni;
        $this->apepaterno = $persona->apepaterno;
        $this->apematerno = $persona->apematerno;
        $this->nombres = $persona->nombres;
        $this->namecomplet = $persona->namecomplet;
        $this->fechanac = $persona->fechanac;
        $this->sexo = $persona->sexo;
        $this->direcreal = $persona->direcreal;
        $this->departamento = $persona->departamento;
        $this->provincia = $persona->provincia;
        $this->distrito = $persona->distrito;
        $this->celprin = $persona->celprin;
        $this->email = $persona->email;
        $this->estacivil = $persona->estacivil;
        $this->profesion = $persona->profesion;
        $this->grainstruc = $persona->grainstruc;
        $this->ruc = $persona->ruc;
        $this->discapac = $persona->discapac;
        $this->observac = $persona->observac;
        $this->abrirModal2();

    }

    public function borrar($id)
    {
        //Persona::find($id)->delete();
        $persona = Persona::findOrFail($id);
        $persona -> delete();
        // $this->id_persona = $id;

        // Persona::updateOrCreate(['id'=>$this->id_persona],
        //     [
        //         'estadoreg' => $this->estadoreg = (0),
               
        //     ],);

    }

    public function guardar()
    {
        Persona::updateOrCreate(['id'=>$this->id_persona],
            [
                $validation =$this->validate(),
                'dni' => $this->dni,
                'apepaterno' => $this->apepaterno,
                'apematerno' => $this->apematerno,
                'nombres' => $this->nombres,
                'namecomplet' => $this->nombres.' '. $this->apepaterno.' '. $this->apematerno ,
                'fechanac' => $this->fechanac,
                'sexo' => $this->sexo,
                'direcreal' => $this->direcreal,
                'departamento' => $this->departamento,
                'provincia' => $this->provincia,
                'distrito' => $this->distrito,
                'celprin' => $this->celprin,
                'email' => $this->email,
                'estacivil' => $this->estacivil,
                'profesion' => $this->profesion,
                'grainstruc' => $this->grainstruc,
                'ruc' => $this->ruc,
                'discapac' => $this->discapac,
                'observac' => $this->observac,
            ],$validation);
        $this->cerrarModal();
        $this->limpiarCampos();

    }

    public function mod()
    {
        Persona::updateOrCreate(['id'=>$this->id_persona],
            [
                
                'dni' => $this->dni ,
                'apepaterno' => $this->apepaterno,
                'apematerno' => $this->apematerno,
                'nombres' => $this->nombres,
                'namecomplet' => $this->nombres.' '. $this->apepaterno.' '. $this->apematerno ,
                'fechanac' => $this->fechanac,
                'sexo' => $this->sexo,
                'direcreal' => $this->direcreal,
                'departamento' => $this->departamento,
                'provincia' => $this->provincia,
                'distrito' => $this->distrito,
                'celprin' => $this->celprin,
                'email' => $this->email,
                'estacivil' => $this->estacivil,
                'profesion' => $this->profesion,
                'grainstruc' => $this->grainstruc,
                'ruc' => $this->ruc,
                'discapac' => $this->discapac,
                'observac' => $this->observac,
            ],);
        $this->cerrarModal2();
        $this->limpiarCampos();

    }
    
    public function detalles($id)
    {
    $persona = Persona::find($id);
    $this->id_persona = $id;
    $this->dni = $persona->dni;
    $this->apepaterno = $persona->apepaterno;
    $this->apematerno = $persona->apematerno;
    $this->nombres = $persona->nombres;
    $this->namecomplet = $persona->namecomplet;
    $this->fechanac = $persona->fechanac;
    $this->sexo = $persona->sexo;
    $this->direcreal = $persona->direcreal;
    $this->departamento = $persona->departamento;
    $this->provincia = $persona->provincia;
    $this->distrito = $persona->distrito;
    $this->celprin = $persona->celprin;
    $this->email = $persona->email;
    $this->estacivil = $persona->estacivil;
    $this->profesion = $persona->profesion;
    $this->grainstruc = $persona->grainstruc;
    $this->ruc = $persona->ruc;
    $this->discapac = $persona->discapac;
    $this->observac = $persona->observac;
    $this->abrirModal1();
    
    }

    public function clear()
    
    {
        $this->search ='';
        $this ->page = 1;
        $this ->perPage = '10';
    }


}
