<?php

namespace App\Http\Livewire;

use App\Models\Association;
use Livewire\Component;
use App\Models\papeletaDeInfraccion;
use App\Models\Persona;

use Livewire\WithFileUploads;
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
    $observac ;
    public $docregist = null, $docconsti = null, $docpadron = null;

    public $lunes, $martes, $miercoles, $jueves, $viernes, $sabado, $domingo;

    public $cantPerson=0;
    public $searchTerm1;
    //public $propDni;
    public $modalBPersona=false;
    public $id_buscar;
    public $modalPInfraccion = false;
    public $modalborrar = false; //borrar

  
  

    public $id_pro ,$dnirepre ,$dnideleg,  $propNomCom, $propDirRea;

    public $id_Pers, $dni, $NomCom;

    protected $rules = [
        'dnirepre' => 'required|max:8|unique:associations,dnirepre',
        'dnideleg' => 'required',
        'nombreasoc' => 'required',
        'ubicacion' => 'required',
        'docregist' => 'mimes:pdf|max:5120',
        // // 'docconsti' => 'required|mimes:pdf|max:5120',
        // // 'docpadron' => 'required|mimes:pdf|max:5120',
        // //'docregist' => 'mimes:pdf|max:5120',
        'docconsti' => 'mimes:pdf|max:5120',
        'docpadron' => 'mimes:pdf|max:5120',
 

    ];

    protected $messages = [
        'dnirepre.required' => 'El DNI del representante es obligatorio',
        'dnirepre.unique' => 'El Dni ya existe',
        'dnideleg.required' => 'El DNI del delegado es obligatorio',
        'dnideleg.unique' => 'El Dni ya existe',

        // //'docregist.required' => 'El campo es obligatorio',
        'docregist.mimes' => 'Solo se Admiten Archivos: PDF',
        'docregist.max' => 'El Archivo es Demasiado Grande',
        

        // //'docconsti.required' => 'El campo es obligatorio',
        'docconsti.mimes' => 'Solo se Admiten Archivos: PDF',
        'docconsti.max' => 'El Archivo es Demasiado Grande',

      

        // //'docconsti.required' => 'El campo es obligatorio',
        'docpadron.mimes' => 'Solo se Admiten Archivos: PDF',
        'docpadron.max' => 'El Archivo es Demasiado Grande',
    ];

    public function update($propertyName) 
    {
        $this->validationOnly($propertyName);
    }

    public $modal1 = false; //crear
    public $modal2 = false; //detalles
    public $modal3 = false; //editar

    protected $queryString = [
        'search'=>['except' => ''],
        'perPage'    
    ];

    

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


      /*------------modal borrar---------------*/
      public function abrirModalBorrar()
      {
          $this->modalborrar  = true;
      }
  
      public function cerrarModalBorrar()
      {
          $this->modalborrar  = false;
      }
       /*---------------------------------------*/

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
    public function updatingSearch()
    {
        $this->resetPage();
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


    //agregar nuevo registro
    public function crear1()
    {
        $this->limpiarCampos();
        $this->abrirModal1();
    }

    public function lista()
    {
        $this->limpiarCampos();
        $this->abrirModal1();
    }

    public function abrirModal1()
    {
        $this->modal1 = true;
    }

    public function cerrarModal1()
    {
        $this->modal1 = false;
    }

    public function abrirModal2()
    {
        $this->modal2 = true;
    }

    public function cerrarModal2()
    {
        $this->modal2 = false;
    }

    public function abrirModal3()
    {
        $this->modal3 = true;
    }

    public function cerrarModal3()
    {
        $this->modal3 = false;
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
        //$this->dferia = $association->dferia = $this->lunes.' '.$this->martes.' '.$this->miercoles.' '.$this->jueves.' '.$this->viernes.' '.$this->sabado.' '.$this->domingo;
        $this->dferia = $association->dferia;
        $this->fechaconst = $association->fechaconst;
        $this->docregist = $association->docregist;
        $this->docconsti = $association->docconsti;
        $this->docpadron = $association->docpadron;
        $this->observacion = $association->observacion;
        $this->abrirModal3();

    }

    // public function borrar($id)
    // {
    //     Association::find($id)->delete();
    //     $this->resetPage();
    // }


    public function modalborrar($id)
    {
        //$persona = Persona::findOrFail($id);
        $this->id_association=$id;
        $this->abrirModalBorrar();
    }
    /*------------------------------------------------------*/
    public function borrar()
    {

        // $association = Association::find($this->id_association);
        // $association -> delete();
        $association = Association::findOrFail($this->id_association);
        $association -> delete();
        $this->cerrarModalBorrar();
        $this->resetPage();
    }

    use WithFileUploads;
    public function guardar()
    {

           if(empty($this->docregist)||empty($this->docpadron)||empty($this->docpadron)){
                
            Association::updateOrCreate(['id'=>$this->id_association],
            [
                $validation =$this->validate(),

                'nombreasoc' => $this->nombreasoc,
                'dnirepre' => $this->dnirepre,
                'dnideleg' => $this->dnideleg,
                'ubicacion' => $this->ubicacion,
                'rubroasoc' => $this->rubroasoc,
                'tipoasoc' => $this->tipoasoc,
                'dferia' => $this->lunes.' '.$this->martes.' '.$this->miercoles.' '.$this->jueves.' '.$this->viernes.' '.$this->sabado.' '.$this->domingo,
                'fechaconst' => $this->fechaconst,
                'observacion' => $this->observacion,
                'docregist' =>   $this->docregist = null,
                'docconsti' =>  $this->docconsti = null,
                'docpadron' =>   $this->docpadron = null,
              
                
            ],$validation);

        }else{

                Association::updateOrCreate(['id'=>$this->id_association],
                [
    
                    'nombreasoc' => $this->nombreasoc,
                    'dnirepre' => $this->dnirepre,
                    'dnideleg' => $this->dnideleg,
                    'ubicacion' => $this->ubicacion,
                    'rubroasoc' => $this->rubroasoc,
                    'tipoasoc' => $this->tipoasoc,
                    'dferia' => $this->lunes.' '.$this->martes.' '.$this->miercoles.' '.$this->jueves.' '.$this->viernes.' '.$this->sabado.' '.$this->domingo,
                    'fechaconst' => $this->fechaconst,
                    'observacion' => $this->observacion,
                    'docregist' =>  $this-> docregist->store('documentos'),
                    'docpadron' =>   $this->docconsti->store('documentos'),
                    'docregist' =>  $this->docpadron->store('documentos'),
                  
                    
                ],);

                // $docregisto = null;
                // $docconsti = null;
                // $docpadron = null;
            }
   
            
           


       
            // if(!empty($this->docconsti)){
            //     $validation =$this->validate();
            //     $docconsti = $this->docconsti->store('documentos');
            // }else{
            //     $docconsti = null;
            // }

            // if(!empty($this->docpadron)){
            //     $validation =$this->validate();
            //     $docpadron = $this->docpadron->store('documentos');
            // }else{
            //     $docpadron = null;
            // }
    
        $this->cerrarModal1();
        $this->limpiarCampos();

    }

    public function hydrate()
    {
        $this->resetErrorBag('dnirepre');
        $this->resetValidation('dnirepre');
        $this->resetErrorBag('dnideleg');
        $this->resetValidation('dnideleg');
        $this->resetErrorBag('nombreasoc');
        $this->resetValidation('nombreasoc');
        $this->resetErrorBag('ubicacion');
        $this->resetValidation('ubicacion');
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
     $this->abrirModal2();
     
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
                 'dferia' => $this->lunes.' '.$this->martes.' '.$this->miercoles.' '.$this->jueves.' '.$this->viernes.' '.$this->sabado.' '.$this->domingo,
                //  'dferia' => $this->dferia,
                 'fechaconst' => $this->fechaconst,
                 'observacion' => $this->observacion,
             ],);

             if(!empty($this->docregist)){
                $validation =$this->validate();
                $docregist = $this->docregist->store('documentos');
            }else{
                $docregisto = null;
            }

            if(!empty($this->docconsti)){
                $validation =$this->validate();
                $docconsti = $this->docconsti->store('documentos');
            }else{
                $docconsti = null;
            }

            if(!empty($this->docpadron)){
                $validation =$this->validate();
                $docpadron = $this->docpadron->store('documentos');
            }else{
                $docpadron = null;
            }

         $this->cerrarModal3();
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

