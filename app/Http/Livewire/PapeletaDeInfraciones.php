<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\papeletaDeInfraccion;
use App\Models\infraccion;
use App\Models\InfraccionPersona;
use App\Models\Persona;
use App\Models\InfraccionDatos;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\papeletaExport;
use App\Http\Controllers\papeletaController;

class PapeletaDeInfraciones extends Component
{
    // public $dbupdata="";

    public $datosPapeletaDeInfraciones;
    // public $personasLivewire;
    public $personas;
    //papeleta 
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
    //  papeleta infraccion
    public $id_cod;
    public $id_RelPapInf;
    public $inf1="", $inf2="", $inf3="", $inf4="", $inf5="", $inf6="";
    public $idInf1, $idInf2, $idInf3, $idInf4, $idInf5, $idInf6;
    public $modInf1=false, $modInf2=false, $modInf3=false, $modInf4=false, $modInf5=false, $modInf6=false;
    public $multa1, $multa2, $multa3, $multa4, $multa5, $multa6;

    public $modalM = false;


    // infraccion
    public $id_inf, $codigo, $nombre, $multa, $costo;
    public $estadotemp;
    // papeleta infraccion
    public $id_acta,$numActa,$fechaInterven,$nomEstablecimiento,$dirEstablecimiento=" ",$dirLegal="",$actaDecomiso, $informeFisca,$feInformeFisca,$observaciones;
    //persona relacionados con la papeleta
    public $id_pro, $propDni, $propNomCom, $propDirRea;
    public $id_fisc, $fiscDni, $fiscNomCom;
    public $id_soli, $soliDni, $soliNomCom;
    
    public $id_Pers, $dni,$NomCom;
    //descargo
    public $descNom,$descNum, $descFecha;
    // informe a gtde
    public  $IGTDEinforNum, $IGTDEfe1, $IGTDEresuelve, $IGTDEinforme, $IGTDEfe2;
    // resolucion
    public $resolNum, $resolFe, $resolResuelve, $resolTotMul, $resolMonto; 
    // reconsideracion 
    public $recNum, $recFe, $resRecNum, $resRecFe, $resRecRes, $resRecPagMul, $resRecTotPag, $infoDesAlcaldia, $infoDesFe; 
    // apelacion
    public $apNum, $apFe, $apRes, $constCoact, $constCoactF;
    // infraccion persona 
    public $id_IP, $idpap;

    public $modal=false;
    public $modal1=false;
    // public $modal2=false;
    public $modalBPersona=false;
    public $modalPInfraccion =false;
    public $modalMulta =false;
    // public $modal1;
    public $div = false;
    public $div1 = false;
    public $div2 = false;
    public $div3 = false;
    public $div4 = false;
    public $div5 = false;
    public $div6 = false;
    public $div7 = false;
    public $contMulta = 0;
    public $searchTerm;
    public $searchMulta;
    public $searchTerm1;
    // dni temporal para registrar 
    public $searchTerm1temp;


    public $rp1;
    public $rp2;
    public $rp3;

    public $dniI;
    public $namecompletI;

    // id para buscar 
    public $id_buscar;
    // base de datos infraccion datos 
    public $bdInfraccionDatos;
    // numero de registros de persona 
    public $cantPerson=0;

    
    public $idInfraccionPerson;

    // protected $rules =[
    //     'estadoReg' => 'required|min:2',
    //     'numActa' => 'required|min:2',
    //     'fechaInterven' => ['required', 'before_or_equal:today'],
    //     'nomEstablecimiento' => 'required|min:2',
    //     'dirEstablecimiento' => 'required|min:2',            
    //     'actaDecomiso' => 'required|min:2',
    // ];
    public function render()
    {
        $searchTermT = '%'.$this->searchTerm. "%";
        $searchTermTP = $this->searchTerm;

        $this-> datosPapeletaDeInfraciones=papeletaDeInfraccion::
                                                                //  whereHas('persona', function($query) use ($searchTermTP) {
                                                                //     $query->where('id', $searchTermTP);
                                                                // })
                                                                // ->orwhere('nomEstablecimiento','LIKE',$searchTermT)
                                                                where('nomEstablecimiento','LIKE',$searchTermT)
                                                                // findOrFail($searchTermT)
                                                                // join('personas','papeleta_de_infraccion.id','=','personas.id')
                                                                // ->where('personas.dni','=',74829964)
                                                                ->orderBy('id','ASC')->get();
        // $this->datosPapeletaDeInfraciones=papeletaDeInfraccion::all()
        $searchMulta = '%'.$this->searchMulta. "%";
        $this->bdinfraccion=InfraccionDatos::where('codigo','LIKE',$searchMulta)->get();

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
        
        $datosPersona=InfraccionPersona::all();
        // $bdInfraccionDatos=InfraccionDatos::all();
        // $this->dInfraccionPerson=infraccionPersona::all();
        
        return view('livewire.papeleta-de-infraciones',['dpersona'=>$datosPersona],['bdinfraccion1'=>$this->bdinfraccion]);
            // ->extends('livewire.personas');

    }

    // public function exportExcel(){
    //     return Excel::download(new papeletaExport, 'papeleta-export.xlsx');
    // }

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
    public function abrirModalMulta(){
        $this->modalMulta =true;
    }
    public function cerrarModalBPersona(){
        $this->modalBPersona = false;
        $this->modalPInfraccion  = false;
        
        $this->limpiarCamposPersona();
    }
    public function cerrarModalMulta(){
        $this->modalMulta = false;
    }

    public function registrar(){
        $this->estado='pendiente';
        // $this->estadotemp = $this->estado;
        $this->modal1 = true;
    }
    public function registrarBuscar($buscarIdPersona){
        $this->id_buscar= $buscarIdPersona;
        $this->modalBPersona = true;
    }
    public function crearPersona1(){
        $this->modalPInfraccion  = true;
        
    }
    
    public function cerrarModal(){
        $this->modal = false;
        $this->limpiarCampos();
    }
    public function cerrarModal1(){
        $this->modal1 = false;
        
        $this->modInf1=false;
        $this->modInf2=false;
        $this->modInf3=false;
        $this->modInf4=false;
        $this->modInf5=false;
        $this->modInf6=false;
        $this->contMulta=0;
        
        $this->limpiarCampos();
    }
    public function cerrarModal3(){
        $this->modal1 = false;
        $this->limpiarCampos();
    }
    // cerrar modal de crear persona 
    public function cerrarModalCP(){
        $this->modalPInfraccion  = false;
        // $this->modalBPersona = false;
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
                'namecomplet' => $this->namecomplet,
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
                'estado' => $this->estadoreg,
                'observac' => $this->observac,
            ]); 
            $data = Persona::latest('id')->first();
            $data = $data->id;
            
            $this->almacenarInput($data);
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
    
    public function almacenarInput($id_selBusc){
        // $array = array_add($array, 'key', 'value');
        if ($this->id_buscar==0) {
            # code...
            $this->id_Pers = $id_selBusc;
            $db = Persona::where('id',$id_selBusc)->get();
            foreach ($db as $db1) {
                $this->propNomCom = $db1->namecomplet;
                $this->propDni= $db1->dni;
                $this->propDirRea= $db1->direcreal;
            }
        }
        if ($this->id_buscar==1) {
            # code...
            $this->id_fisc = $id_selBusc;
            $db = Persona::where('id',$id_selBusc)->get();
            foreach ($db as $db1) {
                $this->fiscNomCom = $db1->namecomplet ;
                $this->fiscDni= $db1->dni;
            }
        }
        $this->id_buscar=0;
        
        $this->cerrarModalBPersona();

    }
    public function abrirsegmento($n){
        switch ($n) {
            case 1:
                $this->div=true;
                $this->div1=false;
                $this->div2=false;
                $this->div3=false;
                $this->div4=false;
                $this->div5=false;
                $this->div6=false;
                $this->div7=false;
                break;
            case 2:
                $this->div1=true;
                $this->div=true;
                $this->div2=false;
                $this->div3=false;
                $this->div4=false;
                $this->div5=false;
                $this->div6=false;
                $this->div7=false;
                break;
            case 3:
                $this->div=true;
                $this->div1=false;
                $this->div2=true;
                $this->div3=false;
                $this->div4=false;
                $this->div5=false;
                $this->div6=false;
                $this->div7=false;
                break;
            case 4:
                $this->div=true;
                $this->div1=false;
                $this->div2=false;
                $this->div3=true;
                $this->div4=false;
                $this->div5=false;
                $this->div6=false;
                $this->div7=false;
                break;
            case 5:
                $this->div=true;
                $this->div1=false;
                $this->div2=false;
                $this->div3=false;
                $this->div4=true;
                $this->div5=false;
                $this->div6=false;
                $this->div7=false;
                break;
            case 6:
                $this->div=true;
                $this->div1=false;
                $this->div2=false;
                $this->div3=false;
                $this->div4=false;
                $this->div5=true;
                $this->div6=false;
                $this->div7=false;
                break;
            case 7:
                $this->div=true;
                $this->div1=false;
                $this->div2=false;
                $this->div3=false;
                $this->div4=false;
                $this->div5=false;
                $this->div6=true;
                $this->div7=false;
                break;
            case 8:
                $this->div=true;
                $this->div1=false;
                $this->div2=false;
                $this->div3=false;
                $this->div4=false;
                $this->div5=false;
                $this->div6=false;
                $this->div7=true;
                break;
            default:
                # code...
                break;
        }
    }
    public function limpiarCampos(){
        $this->id_acta="";
        $this->estado="";
        $this->numActa="";
        $this->fechaInterven="";
        $this->nomEstablecimiento="";
        $this->dirEstablecimiento="";
        $this->dirLegal="";
        $this->actaDecomiso="";
        $this->informeFisca="";
        $this->feInformeFisca="";
        $this->observaciones="";

        $this->id_Pers="";
        $this->propDni="";
        $this->propNomCom="";
        $this->propDirRea="";
        $this->fiscNomCom="";

        //descargo
        $this->descNom="";
        $this->descNum="";
        $this->descFecha="";
        // informe a gtde
        $this->IGTDEinforNum="";
        $this->IGTDEfe1="";
        $this->IGTDEresuelve="";
        $this->IGTDEinforme="";
        $this->IGTDEfe2="";
        // resolucion
        $this->resolNum="";
        $this->resolFe="";
        $this->resolResuelve="";
        $this->resolTotMul="";
        $this->resolMonto="";
        
        // reconsideracion 
        $this->recNum="";
        $this->recFe="";
        $this->resRecNum="";
        $this->resRecFe="";
        $this->resRecRes="";
        $this->resRecPagMul="";
        $this->resRecTotPag="";
        $this->infoDesAlcaldia="";
        $this->infoDesFe="";
        
        // apelacion
        $this->apNum="";
        $this->apFe="";
        $this->apRes="";
        $this->constCoact="";
        $this->constCoactF="";

        // $this->id_selBusc="";
        $this->propietarioInput="";
        $this->namecomplet = '';

        $this->dniI="";
        $this->namecompletI="";

        // infraccion 
        $this->inf1="";
        $this->inf2="";
        $this->inf3="";
        $this->inf4="";
        $this->inf5="";
        $this->inf6="";

        $this->multa1="";
        $this->multa2="";
        $this->multa3="";
        $this->multa4="";
        $this->multa5="";
        $this->multa6="";

        $this->modInf1=false;
        $this->modInf2=false;
        $this->modInf3=false;
        $this->modInf4=false;
        $this->modInf5=false;
        $this->modInf6=false;

    }
    public function editar($id){
        $dbupdata = infraccion::where('papeletaI_id',$this->id_acta)->get();
        $PapeletaDeInfraccion1=papeletaDeInfraccion::findOrFail($id);
        $this->id_acta=$id;
        $this->estado=$PapeletaDeInfraccion1->estado;
        $this->estadotemp=$PapeletaDeInfraccion1->estado;
        $this->numActa=$PapeletaDeInfraccion1->numActa;
        $this->fechaInterven=$PapeletaDeInfraccion1->fechaInterven;
        $this->nomEstablecimiento=$PapeletaDeInfraccion1->nomEstablecimiento;
        $this->dirEstablecimiento=$PapeletaDeInfraccion1->dirEstablecimiento;
        $this->dirLegal=$PapeletaDeInfraccion1->dirLegal;
        $this->actaDecomiso=$PapeletaDeInfraccion1->actaDecomiso;
        $this->informeFisca=$PapeletaDeInfraccion1->informeFisca;
        $this->feInformeFisca=$PapeletaDeInfraccion1->feInformeFisca;
        $this->observaciones=$PapeletaDeInfraccion1->observaciones;
        // propietario
        // if (isset($PapeletaDeInfraccion1->persona[0]->namecomplet)) {
        //     $this->propNomCom=$PapeletaDeInfraccion1->persona[0]->namecomplet;
        //     $this->propDirRea=$PapeletaDeInfraccion1->persona[0]->direcreal;
        // } else {
        //     $this->propNomCom="";
        //     $this->propDirRea="";
        // }
        // // fiscalizador
        // if (isset($PapeletaDeInfraccion1->persona[1]->namecomplet)) {
        //     $this->fiscNomCom=$PapeletaDeInfraccion1->persona[1]->namecomplet;
        // } else {
        //     $this->fiscNomCom="";
        // }
        
        // // solicitante
        // if (isset($PapeletaDeInfraccion1->persona[2]->namecomplet)) {
        //     $this->soliNomCom=$PapeletaDeInfraccion1->persona[2]->namecomplet;
        // } else {
        //     $this->soliNomCom="";
        // }

        //descargo
        $this->descNom=$PapeletaDeInfraccion1->descargoNom;
        $this->descNum=$PapeletaDeInfraccion1->descargoNum;
        $this->descFecha=$PapeletaDeInfraccion1->descargoFech;
        // informe a gtde
        $this->IGTDEinforNum=$PapeletaDeInfraccion1->IGTDEinformeNum;
        $this->IGTDEfe1=$PapeletaDeInfraccion1->IGTDEfecha;
        $this->IGTDEresuelve=$PapeletaDeInfraccion1->IGTDEresuelve;
        $this->IGTDEinforme=$PapeletaDeInfraccion1->IGTDEinforme;
        $this->IGTDEfe2=$PapeletaDeInfraccion1->IGTDEfecha2;
        // resolucion
        $this->resolNum=$PapeletaDeInfraccion1->resolGTDENum;
        $this->resolFe=$PapeletaDeInfraccion1->resolFecha;
        $this->resolResuelve=$PapeletaDeInfraccion1->resolResuelve;
        $this->resolTotMul=$PapeletaDeInfraccion1->resolTotMulta;
        $this->resolMonto=$PapeletaDeInfraccion1->resolMonto;
        
        // reconsideracion 
        $this->recNum=$PapeletaDeInfraccion1->reconsRegisNum;
        $this->recFe=$PapeletaDeInfraccion1->reconsFecha;
        $this->resRecNum=$PapeletaDeInfraccion1->resoReconGtdeNum;
        $this->resRecFe=$PapeletaDeInfraccion1->resoReconFecha;
        $this->resRecRes=$PapeletaDeInfraccion1->resoReconResuelve;
        $this->resRecPagMul=$PapeletaDeInfraccion1->resoReconPagoMulta;
        $this->resRecTotPag=$PapeletaDeInfraccion1->resoReconTotPagar;
        $this->infoDesAlcaldia=$PapeletaDeInfraccion1->infDespaAlcaldia;
        $this->infoDesFe=$PapeletaDeInfraccion1->infDespaFecha;
        
        // apelacion
        $this->apNum=$PapeletaDeInfraccion1->apelaRegisGTDENum;
        $this->apFe=$PapeletaDeInfraccion1->apelaFecha;
        $this->apRes=$PapeletaDeInfraccion1->apelaResuelve;

        $this->constCoact=$PapeletaDeInfraccion1->constCoactivo;
        $this->constCoactF=$PapeletaDeInfraccion1->constCoactivoFech;

        // infraccion
        // if (isset($PapeletaDeInfraccion1->infracciondatos[0]->codigo)) {
        //     # code...
        //     $this->inf1=$PapeletaDeInfraccion1->infracciondatos[0]->codigo;
        //     $this->multa1=$PapeletaDeInfraccion1->infracciondatos[0]->multa;
        //     $this->idInf1=$PapeletaDeInfraccion1->infracciondatos[0]->id;
        // }
        // if (isset($PapeletaDeInfraccion1->infracciondatos[1]->codigo)) {
        //     # code...
        //     $this->inf2=$PapeletaDeInfraccion1->infracciondatos[1]->codigo;
        //     $this->multa2=$PapeletaDeInfraccion1->infracciondatos[1]->multa;
        //     $this->idInf2=$PapeletaDeInfraccion1->infracciondatos[1]->id;
        // }
        // if (isset($PapeletaDeInfraccion1->infracciondatos[2]->codigo)) {
        //     # code...
        //     $this->inf3=$PapeletaDeInfraccion1->infracciondatos[2]->codigo;
        //     $this->multa3=$PapeletaDeInfraccion1->infracciondatos[2]->multa;
        //     $this->idInf3=$PapeletaDeInfraccion1->infracciondatos[2]->id;
        // }
        // if (isset($PapeletaDeInfraccion1->infracciondatos[3]->codigo)) {
        //     # code...
        //     $this->inf4=$PapeletaDeInfraccion1->infracciondatos[3]->codigo;
        //     $this->multa4=$PapeletaDeInfraccion1->infracciondatos[3]->multa;
        //     $this->idInf4=$PapeletaDeInfraccion1->infracciondatos[3]->id;
        // }
        // if (isset($PapeletaDeInfraccion1->infracciondatos[4]->codigo)) {
        //     # code...
        //     $this->inf5=$PapeletaDeInfraccion1->infracciondatos[4]->codigo;
        //     $this->multa5=$PapeletaDeInfraccion1->infracciondatos[4]->multa;
        //     $this->idInf5=$PapeletaDeInfraccion1->infracciondatos[4]->id;
        // }
        // if (isset($PapeletaDeInfraccion1->infracciondatos[5]->codigo)) {
        //     # code...
        //     $this->inf6=$PapeletaDeInfraccion1->infracciondatos[5]->codigo;
        //     $this->multa6=$PapeletaDeInfraccion1->infracciondatos[5]->multa;
        //     $this->idInf6=$PapeletaDeInfraccion1->infracciondatos[5]->id;
        // }
         
        $this->abrirModal();
    }
    public function borrar($id){
        papeletaDeInfraccion::find($id)->delete();
        session()->flash('message','Registro eliminado correctamente');
    }

    protected $messages = [
        // 'estado.required' => 'Estado requerido',
        'numActa.unique' => 'El numero de acta ya existe',
        'numActa.required' => 'Numero de acta requerido',
        'fechaInterven.required' => 'Fecha de intervencion requerido',
        'nomEstablecimiento.required' => 'Nombre de establecimiento requerido',
        'dirEstablecimiento.required' => 'Direccion de establecimiento requerido',
        'actaDecomiso.required' => 'Numero de acta de decomiso requerido',
        // 'numActa.required' => 'numero de acta',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            // 'estado'=>'required',
            'numActa'=>['required','unique:papeleta_de_infraccion,numActa'],
            'fechaInterven' => ['required', 'before_or_equal:today'],
            'nomEstablecimiento' => 'required',
            'dirEstablecimiento' => 'required',            
            'actaDecomiso' => 'required',
            'propDni' => 'required',
            'propNomCom' => 'required',
            
        ]);
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
        
        // papeletaDeInfraccion::updateOrCreate(['id'=>$this->id_actaa],[
        //     'estados->estado //     'numActa' => $this->numActa,
        //     'fechaInterven' => $this->fechaInterven,
        //     'nomEstablecimiento' => $this->nomEstablecimiento,
        //     'dirEstablecimiento' => $this->dirEstablecimiento,            
        //     'actaDecomiso' => $this->actaDecomiso,
        // ]);

        $data = papeletaDeInfraccion::latest('id')->first();
        // $this->idpap= papeletaDeInfraccion::all();

        // $license = papeletaDeInfraccion::find($data->id);
        InfraccionPersona::create([
            'persona_id'=>$this->id_fisc,
            'papeletaIP_id'=>$data->id,
        ]);
        InfraccionPersona::create([
            'persona_id'=>$this->id_Pers,
            'papeletaIP_id'=>$data->id,
        ]);

        if ($this->inf1!="") {
            infraccion::create([
                'papeletaI_id'=>$data->id,
                'infraccion_datos_id'=>'1',
            ]);
        }
        if ($this->inf2!="") {
            infraccion::create([
                'papeletaI_id'=>$data->id,
                'infraccion_datos_id'=>'2',
            ]);
        }
        if ($this->inf3!="") {
            infraccion::create([
                'papeletaI_id'=>$data->id, 
                'infraccion_datos_id'=>'3',
            ]);
        }
        if ($this->inf4!="") {
            infraccion::create([
                'papeletaI_id'=>$data->id,
                'infraccion_datos_id'=>'3',
            ]);
        }
        if ($this->inf5!="") {
            infraccion::create([
                'papeletaI_id'=>$data->id,
                'infraccion_datos_id'=>'4',
            ]);
        }
        if ($this->inf6!="") {
            infraccion::create([
                'papeletaI_id'=>$data->id,
                'infraccion_datos_id'=>'5',
            ]);
        }
        
        $this->cerrarModal1();

    }
    public function guardarPapeleta(){
        papeletaDeInfraccion::updateOrCreate(['id'=>$this->id_acta],
        [   'estado' =>$this->estado,
            'informeFisca' => $this->informeFisca,
            'feInformeFisca' => $this->feInformeFisca,
            //descargo
            'descargoNom'=>$this->descNom,
            'descargoNum'=>$this->descNum,
            'descargoFech'=>$this->descFecha,
            // informe a gtde
            'IGTDEinformeNum'=>$this->IGTDEinforNum,
            'IGTDEfecha'=>$this->IGTDEfe1,
            'IGTDEresuelve'=>$this->IGTDEresuelve,
            'IGTDEinforme'=>$this->IGTDEinforme,
            'IGTDEfecha2'=>$this->IGTDEfe2,
            // resolucion
            'resolGTDENum'=>$this->resolNum,
            'resolFecha' =>$this->resolFe,
            'resolResuelve'=>$this->resolResuelve,
            'resolTotMulta'=>$this->resolTotMul,
            'resolMonto'=>$this->resolMonto,
            // reconsideracion 
            'reconsRegisNum'=>$this->recNum,
            'reconsFecha'=>$this->recFe,
            'resoReconGtdeNum'=>$this->resRecNum,
            'resoReconFecha'=>$this->resRecFe,
            'resoReconResuelve'=>$this->resRecRes,
            'resoReconPagoMulta'=>$this->resRecPagMul,
            'resoReconTotPagar'=>$this->resRecTotPag,
            'infDespaAlcaldia'=>$this->infoDesAlcaldia,
            'infDespaFecha'=>$this->infoDesFe,
            // apelacion
            'apelaRegisGTDENum'=>$this->apNum,
            'apelaFecha'=>$this->apFe,
            'apelaResuelve'=>$this->apRes,
            'constCoactivo'=>$this->constCoact,
            'constCoactivoFech'=>$this->constCoactF,
        ]);
        

        // $dbupdata = infraccion::where('papeletaI_id',$this->id_acta)->get();
            

        // foreach ($variable as $key => $value) {
        //     # code...
        // }

        // if (isset($this->idInf1)) {
        //     # code...
        //     infraccion::updateOrCreate(['id'=>$this->idInf1],
        //     [   
        //         'papeletaI_id'=>$this->inf1
        //     ]);
        // }  
        // if (isset($this->idInf2)) {
        //     # code...
        //     infraccion::updateOrCreate(['id'=>$this->idInf2],
        //     [   
        //          'papeletaI_id'=>$this->inf2
        //     ]);
        // }  
        // if (isset($this->idInf3)) {
        //     # code...
        //     infraccion::updateOrCreate(['id'=>$this->idInf3],
        //     [   
        //          'papeletaI_id'=>$this->inf3
        //     ]);
        // }  
        // if (isset($this->idInf4)) {
        //     # code...
        //     infraccion::updateOrCreate(['id'=>$this->idInf4],
        //     [   
        //          'papeletaI_id'=>$this->inf4
        //     ]);
        // }  
        // if (isset($this->idInf5)) {
        //     # code...
        //     infraccion::updateOrCreate(['id'=>$this->idInf5],
        //     [   
        //          'papeletaI_id'=>$this->inf5
        //     ]);
        // }  
        // if (isset($this->idInf6)) {
        //     # code...
        //     infraccion::updateOrCreate(['id'=>$this->idInf6],
        //     [   
        //          'papeletaI_id'=>$this->inf6
        //     ]);
        // }  
        
        // session()->flash('message',
        //     $this->id_actaa?'Actualizacion exitosa':'Se guardo exitosamente'
        // );
        $this -> cerrarModal();
        $this -> limpiarCampos();
    }
    // public function 
    
    public function selecCodInf($id_cod){
        
        $db11 = InfraccionDatos::where('id',$id_cod)->get();
        $this->contMulta=$this->contMulta+1;
        
        if ($this->modInf1==false) {
            foreach ($db11 as $dbtemp) {
                $this->inf1=$dbtemp->codigo;
                $this->multa1=$dbtemp->multa;
            }
            $this->modInf1 = true;
            # code...
        }  
        else {
            
            if ($this->modInf2==false) {
                foreach ($db11 as $dbtemp) {
                    $this->inf2=$dbtemp->codigo;
                    $this->multa2=$dbtemp->multa;
                }
                $this->modInf2 = true;
                # code...
            }
            else {
                # code...
                if ($this->modInf3==false) {
                    foreach ($db11 as $dbtemp) {
                        $this->inf3=$dbtemp->codigo;
                        $this->multa3=$dbtemp->multa;
                    }
                    $this->modInf3 = true;
                    # code...
                }  
                else {
                    # code...
                    if ($this->modInf4==false) {
                        foreach ($db11 as $dbtemp) {
                            $this->inf4=$dbtemp->codigo;
                            $this->multa4=$dbtemp->multa;
                        }
                        $this->modInf4 = true;
                        # code...
                    } 
                    else {
                        # code...
                        if ($this->modInf5==false) {
                            foreach ($db11 as $dbtemp) {
                                $this->inf5=$dbtemp->codigo;
                                $this->multa5=$dbtemp->multa;
                            }
                            $this->modInf5 = true;
                            # code...
                        }   
                        else {
                            # code...
                            if ($this->modInf6==false) {
                                foreach ($db11 as $dbtemp) {
                                    $this->inf6=$dbtemp->codigo;
                                    $this->multa6=$dbtemp->multa;
                                }
                                $this->modInf6 = true;
                                # code...
                            }          
                        }       
                    } 
                }
            }  
        }
        $this->cerrarModalMulta();
    }
    public function borrarInfraccion($idinfborr){
        $this->contMulta=$this->contMulta-1;
        switch ($idinfborr) {
            case '1':
                $this->inf1="";
                $this->multa1="";
                $this->modInf1=false;
                break;
            case '2':
                $this->inf2="";
                $this->multa2="";
                $this->modInf2=false;
                break;
            case '3':
                $this->inf3="";
                $this->multa3="";
                $this->modInf3=false;
                break;
            case '4':
                $this->inf4="";
                $this->multa4="";
                $this->modInf4=false;
                break;
            case '5':
                $this->inf5="";
                $this->multa5="";
                $this->modInf5=false;
                break;
            case '6':
                $this->inf6="";
                $this->multa6="";
                $this->modInf6=false;
                break;
        }
    }

}
