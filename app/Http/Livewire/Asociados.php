<?php

namespace App\Http\Livewire;

use App\Models\Asociado;
use Livewire\Component;
use App\Models\Persona;
use App\Models\Association;
use Livewire\WithPagination;

class Asociados extends Component
{
    public $personas,$associations;

    public 
      $estado, 
      $mostrar,
      $papeletaDeIn,
      $id_registrar,
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


    public 
    $dniaso,
    $nombrecomplet, 
    $ubicacion,
    $asociacion,
    $rubro,
    $zona,
    $numpadron,
    $id_asociado,
    $observaciones,
    $search = '',
    $perPage = '10';


    public $modal = false;//crear
    public $modal1 = false;//detalles
    public $modal2 = false;//editar
    public $modalborrar = false; //borrar


    public $modalBPersona=false;//modal buscar persona
    public $id_buscar;
    public $id_buscar1;
    public $modalPInfraccion = false;
    public $cantPerson=0;//cantidad de personas encontradas despues de buscar
    public $searchTerm1;//almacenar palabra buscada
    public $modalMulta =false;

    public $modalBAsociacion=false;//modal buscar asociacion
    public $cantAso=0;//cantidad de asociaciones encontradas despues de buscar
    public $searchTerm2;//almacenar palabra buscada

    public $id_Pers, $id_Comer, $dni;


    

    protected $rules = [
        'dniaso' => 'required|max:8|unique:asociados,dniaso|unique:comerciantes,dnicomer',
        'numpadron' => 'required|unique:asociados,numpadron',

    ];

    protected $message = [

        'dniaso.required' => 'el dni es requiero',

        'dnicomer.unique' => 'El Dni ya existe en comer',
        'dniaso.unique' => 'el dni ya existe ',


        'numpadron.required' => 'numero de padron es requerido',
        'numpadron.unique' => 'el numero de padron ya existe ',

    ];


    public function hydrate()
    {
        $this->resetErrorBag('dniaso');
        $this->resetValidation('dniaso');
        $this->resetErrorBag('numpadron');
        $this->resetValidation('numpadron');
        $this->resetErrorBag('comerciantes,dnicomer');
        $this->resetValidation('comerciantes,dnicomer');
    }


    public function update($propertyName) 
    {
        $this->validationOnly($propertyName);
    }

    protected $queryString = [
        'search'=>['except' => ''],
        'perPage'    
    ];




  
    use WithPagination; 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {


        /*con sulta de dni en tabla personas */
        $searchTerm1 = '%'.$this-> searchTerm1. "%";
        $searchTerm1temp =$this-> searchTerm1;
        $this->personas=Persona::where('dni','LIKE',$searchTerm1)->orderBy('id','ASC')->get();
        $this->cantPerson=$this->personas->count();

        /*cantidad de personas mostrar boton de registro */
        if ($this->cantPerson>0) {
            $this->cantPerson=false;
        } else {
            $this->cantPerson=true;
            //captura dni en modal registro de persoas
            $this->dni=$searchTerm1temp;
        }

        /*--------------------------------------- */

         /*con sulta de nombreasco en tabla association*/
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
        /*-------------------------------------------------*/

        return view('livewire.asociados',[ 
            'asociados' => Asociado::where('dniaso', 'LIKE', "%{$this->search}%")
                       ->orWhere('nombrecomplet', 'LIKE', "%{$this->search}%")  
                       ->orWhere('asociacion', 'LIKE', "%{$this->search}%")
                       ->orWhere('rubro', 'LIKE', "%{$this->search}%") 
                       ->orWhere('zona', 'LIKE', "%{$this->search}%")
                       ->orWhere('numpadron', 'LIKE', "%{$this->search}%") 
                        ->paginate($this ->perPage) 
        ]);
    }

        public function clear()
    
    {
        $this->search ='';
        $this ->page = 1;
        $this ->perPage = '10';
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


    
    public function limpiarCampos()
    {
        $this->dniaso = '';
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
            $this->dniaso = $asociado->dniaso;        
            $this->nombrecomplet = $asociado->nombrecomplet;
            $this->ubicacion = $asociado->ubicacion;
            $this->asociacion = $asociado->asociacion;
            $this->rubro = $asociado->rubro;
            $this->zona = $asociado->zona;
            $this->numpadron = $asociado->numpadron;
            $this->observaciones = $asociado->observaciones;
            $this->abrirModal2();


    }

    /* alamenar en variables de base de datos */
    public function guardar()
    {
        Asociado::updateOrCreate(['id'=>$this->id_asociado],
            [
                $validation =$this->validate(),
                'dniaso' => $this->dniaso,
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

    /* fin alamenar en variables de base de datos*/



    public function modalborrar($id)
    {
        //$persona = Persona::findOrFail($id);
        $this->id_asociado=$id;
        $this->abrirModalBorrar();
    }
    /*------------------------------------------------------*/
    public function borrar()
    {

        $asociado = Asociado::findOrFail($this->id_asociado);
        $asociado -> delete();
        $this->cerrarModalBorrar();
        $this->resetPage();
    }


    /*------------------ obtencion de datos para detalles */
    public function detalles($id)
    {
        $asociado = Asociado::find($id);
        $this->id_persona = $id;
        $this->dniaso = $asociado->dniaso;
        $this->nombrecomplet = $asociado->nombrecomplet;
        $this->ubicacion = $asociado->ubicacion;
        $this->asociacion = $asociado->asociacion;
        $this->rubro = $asociado->rubro;
        $this->zona = $asociado->zona;
        $this->numpadron = $asociado->numpadron;
        $this->observaciones = $asociado->observaciones;
        $this->abrirModal1();
    }
    /*--------fin obtencion de datos para detalles */

  
    /*----------------------------Funcion Buscar persona----------------- */
       public function abrirModalPInfraccion(){
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

    /*--------obteniendo datos desde la tabla personas--------- */
    public function almacenarInput($id_selBusc){
        if ($this->id_buscar==0) {
            $this->id_Pers = $id_selBusc;
            $db = Persona::where('id',$id_selBusc)->get();
            foreach ($db as $db1) {
                $this->dniaso= $db1->dni;
                $this->nombrecomplet = $db1->namecomplet;

                
            }
        }
    /*-------- fin obteniendo datos desde la tabla personas--------- */
        $this->id_buscar=0;
        
        $this->cerrarModalBPersona();

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

     /*---------------------------- fin Funcion Buscar persona----------------- */


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



    /*------------REGISTAR DESDE COMERCIANTES---------------------*/

    public function cerrarModalCP()
    {
        $this->modalPInfraccion = false; 
        $this->limpiarCampos();
    }


        //agregar nuevo registro
        public function crear1()
        {
            $this->limpiarCampos();
            $this->abrirModal1();
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

     
    /*---------------------------------------------------------------------------*/


 

     public function modificar()
     {
         Asociado::updateOrCreate(['id'=>$this->id_asociado],
             [
                'dni' => $this->dni ,
                'nombrecomplet' => $this-> nombrecomplet,
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

