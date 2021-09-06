<?php

namespace App\Http\Livewire;

use App\Models\Association;
use Livewire\Component;
use App\Models\Comerciante;
use App\Models\Persona;
use Livewire\WithFileUploads;

class Comerciantes extends Component
{

    public $datosPapeletaDeInfraciones;
    // public $personasLivewire;
    public $personas;


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
      
    public $comerciantes, 
    $dni,
    // $apepaterno,
    // $apematerno,
    // $nombres,
    $nombrecomplet, 
    $puesto,
    $asociacion,
    $rubro1,
    $rubro2,
    $mercado,
    $dimpuesto,
    $fotopuesto,
    $tipocomer,
    $numpadron,
    $observaciones,
    $id_comerciante;


    

    protected $rules = [
        'dni' => 'required|max:8|unique:personas,dni',
        'fotopuesto' => 'mimes:jpg|max:5120',
    ];

    protected $messages = [
        'dni.required' => 'El DNI es obligatorio',
        'dni.unique' => 'El Dni ya existe',

        //'docregist.required' => 'El campo es obligatorio',
        'docregist.mimes' => 'Solo se Admiten Archivos: PDF',
        'docregist.max' => 'El Archivo es Demasiado Grande',
        
    ];

    public $modal = false;//crear
    public $modal1 = false;//detalles
    public $modal2 = false;//editar
    public $modalBPersona=false;//modal buscar persona
    public $id_buscar;
    public $modalPInfraccion = false;
    public $cantPerson=0;
    public $searchTerm1;

    public $modalMulta =false;

    public function update($propertyName) 
    {
        $this->validationOnly($propertyName);
    }

    public function render()
    {

        $searchTerm1 = '%'.$this-> searchTerm1. "%";
        $searchTerm1temp =$this-> searchTerm1;
        $this->personas=Persona::where('dni','LIKE',$searchTerm1)->orderBy('id','ASC')->get();
        $this->cantPerson=$this->personas->count();

        if ($this->cantPerson>0) {
            $this->cantPerson=false;
        } else {
            $this->cantPerson=true;
            $this->dni=$searchTerm1temp;
        }
        
        $this->comerciantes = Comerciante::all();
        return view('livewire.comerciantes');
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

    //editar
    public function abrirModal2()
    {
        $this->modal2 = true;
    }

    public function cerrarModal2()
    {
        $this->modal2 = false;
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
        $this->dimpuesto = '';
        $this->fotopuesto = '';
        $this->tipocomer = '';
        $this->numpadron = '';
        $this->observaciones = '';
        $this->id_comerciante = '';
        
    }

    public function editar($id)
    {
        $comerciante = Comerciante::findOrFail($id);
        $this->id_comerciante = $id;
        $this->dni = $comerciante->dni;
        $this->apepaterno = $comerciante->apepaterno;
        $this->apematerno = $comerciante->apematerno;
        $this->nombres = $comerciante->nombres;
        $this->nombrecomplet = $comerciante->nombrecomplet;
        $this->puesto = $comerciante->puesto;
        $this->asociacion = $comerciante->asociacion;
        $this->rubro1 = $comerciante->rubro1;
        $this->rubro2 = $comerciante->rubro2;
        $this->mercado = $comerciante->mercado;
        $this->dimpuesto = $comerciante->dimpuesto;
        $this->fotopuesto = $comerciante->fotopuesto;
        $this->tipocomer = $comerciante->tipocomer;
        $this->numpadron = $comerciante->numpadron;
        $this->observaciones = $comerciante->observaciones;
        $this->abrirModal();
    }

    use WithFileUploads;
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
                'dimpuesto' => $this->dimpuesto,
                'fotopuesto' => $this->fotopuesto->store('fotos'),
                'tipocomer' => $this->tipocomer,
                'numpadron' => $this->numpadron,
                'observaciones' => $this->observaciones,
            ],$validation);
        $this->cerrarModal();
        $this->limpiarCampos();
    }

    public function borrar($id)
    {
        Comerciante::find($id)->delete();
    }

    public function detalles($id)
    {
        $comerciante = Comerciante::find($id);
        $this->id_comerciante = $id;
        $this->dni = $comerciante->dni;
        $this->apepaterno = $comerciante->apepaterno;
        $this->apematerno = $comerciante->apematerno;
        $this->nombres = $comerciante->nombres;
        $this->puesto = $comerciante->puesto;
        $this->asociacion = $comerciante->asociacion;
        $this->rubro1 = $comerciante->rubro1;
        $this->rubro2 = $comerciante->rubro2;
        $this->mercado = $comerciante->mercado;
        $this->dimpuesto = $comerciante->dimpuesto;
        $this->fotopuesto = $comerciante->fotopuesto;
        $this->tipocomer = $comerciante->tipocomer;
        $this->numpadron = $comerciante->numpadron;
        $this->observaciones = $comerciante->observaciones;
        $this->abrirModal1();
    }

    //funciones buscar

    
    public function abrirModalPInfraccion(){
        // $this->id_buscar = $RegistrarInput;
        $this->modalPInfraccion  = true;
    }
    

    public function cerrarModalBPersona(){
        $this->modalBPersona = false;
        $this->modalPInfraccion  = false;
        
        $this->limpiarCamposPersona();
    }

    public function registrarBuscar($buscarIdPersona){
        $this->id_buscar= $buscarIdPersona;
        $this->modalBPersona = true;
    }

    public function createPersona1(){
        $this->modalPInfraccion = true;
    }


    public function almacenarInput($id_selBusc){
        // $array = array_add($array, 'key', 'value');
        if ($this->id_buscar==0) {
            # code...
            $this->id_Pers = $id_selBusc;
            $db = Persona::where('id',$id_selBusc)->get();
            foreach ($db as $db1) {
                //$this->propNomCom = $db1->namecomplet;
                $this->dni= $db1->dni;
                $this->nombrecomplet = $db1->namecomplet;
                $this->propDirRea= $db1->direcreal;

                
            }
        }

 
        if ($this->id_buscar==1) {
            # code...
            $this->id_fisc = $id_selBusc;
            $db = Association::where('id',$id_selBusc)->get();
            foreach ($db as $db1) {
                $this->asociacion = $db1->nombreasoc ;
                $this->dnideleg= $db1->dni;
            }
        }
        $this->id_buscar=0;
        
        $this->cerrarModalBPersona();

    }

      public function limpiarCamposPersona()
    {
       
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
        $this->estadoreg = '';
        $this->observac = '';
        $this->id_persona = '';
    }



}
