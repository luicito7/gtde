<?php

namespace App\Http\Livewire;

use App\Models\Association;
use Livewire\Component;
use App\Models\papeletaDeInfraccion;
use App\Models\Persona;


use Livewire\WithPagination;

class Associations extends Component
{

    //definimos variables
    public $personas;

    public  
    $nombreasoc, 
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
    $id_persona,
    $id_association,
    $search = '',
    $perPage = '10';

    public $estado, $id_registrar,
    
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
    
    

    public $cantPerson=0;
    public $searchTerm1;
    //public $propDni;
    public $modalBPersona=false;
    public $id_buscar;
    public $modalPInfraccion = false;


    public $id_pro ,$dnirepre ,$dnideleg,  $propNomCom, $propDirRea;

    public $id_Pers, $dni, $NomCom;

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

    public $modal = false;
    public $modal3 = false; 
    public $modal4 = false;
    public $modal5 = false;    

    protected $queryString = [
        'search'=>['except' => ''],
        'perPage'    
    ];

    public function crear(){
         
        $this->abrirModal();
        $this->limpiarCampos();
    }
    
    public function abrirModal(){
        $this->modal = true;
    }


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
                $this->propNomCom = $db1->namecomplet;
                $this->dnirepre= $db1->dni;
                $this->propDirRea= $db1->direcreal;

                
            }
        }

 
        if ($this->id_buscar==1) {
            # code...
            $this->id_fisc = $id_selBusc;
            $db = Persona::where('id',$id_selBusc)->get();
            foreach ($db as $db1) {
                $this->fiscNomCom = $db1->namecomplet ;
                $this->dnideleg= $db1->dni;
            }
        }
        $this->id_buscar=0;
        
        $this->cerrarModalBPersona();

    }

    use WithPagination; 
    public function render()
    {


        
        
        //$this->associations = Association::all();

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

        return view('livewire.associations',[ 
            'associations' => Association::where('nombreasoc', 'LIKE', "%{$this->search}%")
                       ->orWhere('rubroasoc', 'LIKE', "%{$this->search}%")  
                       ->orWhere('dnirepre', 'LIKE', "%{$this->search}%")
                       ->orWhere('dnideleg', 'LIKE', "%{$this->search}%")         
                        ->paginate($this ->perPage)
                                     

        ]);
    }


    //esto no es fijo
    public function abrirModalMulta(){
        $this->modalMulta =true;
    }

    public function cerrarModalMulta(){
        $this->modalMulta = false;
    }

    public function registrar(){
        $this->estado='pendiente';
        // $this->estadotemp = $this->estado;
        $this->modal1 = true;
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

    public function abrirModal5()
    {
        $this->modal5 = true;
    }

    public function cerrarModal5()
    {
        $this->modal5 = false;
    }

    public function cerrarModalCP()
    {
        $this->modalPInfraccion = false; 
        $this->limpiarCampos();
    }


    


    public function limpiarCamposPersona()
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
        $this->estadoreg = '';
        $this->observac = '';
        $this->id_persona = '';
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

        // $this->id_selBusc="";
        $this->propietarioInput="";
        $this->namecomplet = '';
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

    public function guardarPersona()
     {
         Persona::updateOrCreate(['id'=>$this->id_persona],
             [
                 'dni' => $this->dni,
                 'apepaterno' => $this->apepaterno,
                 'apematerno' => $this->apematerno,
                 'nombres' => $this->nombres,
                 'namecomplet' => $this->nombres.' '. $this->apepaterno.' '. $this->apematerno,
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
                 'estadoreg' => $this->estadoreg,
                 'observac' => $this->observac,
             ]); 
             $data = Persona::latest('id')->first();
             $data = $data->id;
             
             $this->almacenarInput($data);
     }

     public function detalles($id)
     {
     $association = Association::find($id);
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
     $this->abrirModal4();
     
     }

     public function modif()
     {
         Association::updateOrCreate(['id'=>$this->id_association],
             [
                 
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
             ],);
         $this->cerrarModal5();
         $this->limpiarCampos();
 
     }

    public function clear()
    
    {
        $this->search ='';
        $this ->page = 1;
        $this ->perPage = '10';
    }



    public function crearPapeleta(){
        $this->validate([
            // 'estado'=>'required',
            'numActa'=>['required','unique:papeleta_de_infraccion,numActa'], 
            'fechaInterven' => ['required', 'before_or_equal:today'],
            'nomEstablecimiento' => 'required',
            'dirEstablecimiento' => 'required',            
            'actaDecomiso' => 'required',
            'propDni' => 'required',
            'dnideleg' => 'required',
            'dnirepre' => 'required',
            'propNomCom' => 'required',
        ]);
        
        papeletaDeInfraccion::create([
            'estado'=>$this->estado,     
            'numActa' => $this->numActa,
            'fechaInterven' => $this->fechaInterven,
            'nomEstablecimiento' => $this->nomEstablecimiento,
            'dirEstablecimiento' => $this->dirEstablecimiento,            
            'actaDecomiso' => $this->actaDecomiso,
            'dirLegal' => $this->dirLegal,
        ]);
        
        $data = papeletaDeInfraccion::latest('id')->first();
        // $this->idpap= papeletaDeInfraccion::all();

        // $license = papeletaDeInfraccion::find($data->id);
      
        
        $this->cerrarModal1();

    }

    
}

