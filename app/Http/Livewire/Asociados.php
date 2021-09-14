<?php

namespace App\Http\Livewire;

use App\Models\Asociado;
use Livewire\Component;
use App\Models\Persona;
use App\Models\Association;

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
        'dni' => 'required|max:8|unique:asociados,dni',

    ];



    

    public $modal = false;//crear
    public $modal1 = false;//detalles
    public $modal2 = false;//editar


    public $modalBPersona=false;//modal buscar persona
    public $id_buscar;
    public $id_buscar1;
    public $modalPInfraccion = false;
    public $cantPerson=0;
    public $searchTerm1;
    
    public $modalMulta =false;

    public $modalBAsociacion=false;//modal buscar asociacion
    public $cantAso=0;
    public $searchTerm2;

    public $id_Pers, $id_Comer;

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


        $searchTerm2 = '%'.$this-> searchTerm2. "%";
        $searchTerm2temp =$this-> searchTerm2;
        $this->associations=Association::where('nombreasoc','LIKE',$searchTerm2)->orderBy('id','ASC')->get();
        $this->cantAso=$this->associations->count();

        if ($this->cantAso>0) {
            $this->cantASo=false;
        } else {
            $this->cantASo=true;
            $this->nombreasoc=$searchTerm2temp;
        }
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
        $this->nombrecomplet = $asociado->nombrecomplet;
        $this->ubicacion = $asociado->ubicacion;
        $this->asociacion = $asociado->asociacion;
        $this->rubro = $asociado->rubro;
        $this->zona = $asociado->zona;
        $this->numpadron = $asociado->numpadron;
        $this->observaciones = $asociado->observaciones;
        $this->abrirModal1();
    }



    //buscar


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


    public function cerrarModalBAsociacion(){
        $this->modalBAsociacion = false;
        $this->modalPInfraccion  = false;
        
        $this->limpiarCamposAsociacion();
    }

    

    public function registrarBuscaraso($buscarIdAsociacion){
        $this->id_buscar1= $buscarIdAsociacion;
        $this->modalBAsociacion = true;
    }


  
    public function almacenarInput1($id_selBusc1){
        if ($this->id_buscar1==0){
            $this->id_Comer = $id_selBusc1;
            $db = Association::where('id',$id_selBusc1)->get();
            foreach ($db as $db1) {
                //$this->propNomCom = $db1->namecomplet;
                $this->asociacion = $db1->nombreasoc ;
            }
        }

        

        $this->id_buscar1=0;
        
        $this->cerrarModalBAsociacion();

    }

    //fin buscar



    public function limpiarCamposAsociacion()
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
        $this->propietarioInput="";
        $this->namecomplet = '';
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
