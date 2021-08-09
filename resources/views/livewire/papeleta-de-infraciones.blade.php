<x-slot name="header">
    <h1 class="text-gra-900">Registro de papeleta de infracciones</h1>
</x-slot>
<div class="py-4 ">
    <div class="py-0.5 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="px-4 py-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
            @if (session()->has('message'))
                <div class="px-4 py-4 my-3 text-teal-900 bg-teal-100 rounded-b shadow-md" role="alert">
                    <div class="flex">
                        <div>
                            <h4>{{session('message') }}</h4>
                        </div>
                    </div>
                </div>
            @endif
            {{-- <div>
                {{$dbupdata}}
            </div>
             --}}
            <div class="flex flex-col content-center w-full px-6 py-2 font-sans text-center bg-white shadow sm:flex-row sm:text-left sm:justify-between sm:items-baseline">
                <div class="mb-1 sm:mb-0 inner">
                    <div class="flex">
                        <div class="ml-4">
                            <button wire:click="registrar()" class="px-4 py-2 my-3 font-bold text-white bg-green-500 rounded-lg hover:bg-green-600">Agregar papeleta de infraccion</button>
                        </div>
                        {{-- <div class="flex flex-wrap content-center ml-6">
                            <a href="#" class="text-2xl text-red-500">
                                <i class="far fa-file-pdf"></i>
                            </a>
                        </div> --}}
                        {{-- <div class="flex flex-wrap content-center ml-4 text-green-400">
                            <a href="{{url("config/page/$datosPapeletaDeInfraciones/excel")}}" class="text-2xl">
                            <a href="" class="text-2xl">
                                <i class="far fa-file-excel"></i>
                            </a>
                        </div> --}}
                    </div>
                    {{-- <h3>
                        <button wire:click="registrar()" class="px-4 py-2 my-3 font-bold text-white bg-green-500 hover:bg-green-600">Crear</button>
                    </h3> --}}
                </div>
                <div class="relative self-center text-gray-600 sm:mb-0 focus-within:text-gray-400">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                    </span>
                    <input wire:model="searchTerm" type="search" name="q" class="py-2 pl-10 text-sm rounded-md focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Buscar..." autocomplete="on">
                    
                    {{-- <input type="text" class="rounded form-control" placeholder="Buscar..." wire:model="searchTerm" /> --}}
                </div>
            </div>
            
            
            @if ($modal)
                @include('livewire.editar-papeleta')
            @endif
            @if ($modal1)
                @include('livewire.crear-papeleta')
            @endif
            <div class="flex">
                
                <div >    
                    {{-- @include('livewire.dataexport') --}}
                    <table class="table-fixed w- full">
                        <thead>
                            <tr class="h-24 text-xs text-white bg-indigo-600">
                                <th class="px-4 py-2 ">ACCION</th>
                                <th class="px-4 py-2 ">ESTADO</th>
                                <th class="px-4 py-2 ">NUMERO DE ACTA</th>
                                <th class="px-4 py-2 ">FECHA DE INTERVENCION</th>
                                <th class="px-4 py-2 ">NOMBRE DE ESTABLECIMIENTO</th>
                                <th class="px-4 py-2 ">PROPIETARIO</th>
                                <th class="px-4 py-2 ">DNI PROPIETARIO</th>
                                {{-- <th class="px-4 py-2 ">DIRECCION DEL ESTABLECIMIENTO</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datosPapeletaDeInfraciones as $datos)
                                <tr class="h-20 text-xs">
                                <td class="px-4 py-2 border">
                                    <button wire:click="editar({{$datos->id}})" class="px-4 py-2 font-bold text-white bg-blue-500 hover:bg-bluebg-red-600">editar</button>
                                    {{-- <button wire:click="borrar({{$datos->id}})" class="px-4 py-2 font-bold text-white bg-red-500 hover:bg-bluebg-red-600">borrar</button> --}}
                                </td>                     
                                <td class="px-4 py-2 border">{{$datos->estado}}</td>
                                <td class="px-4 py-2 border ">{{$datos->numActa}}</td>
                                <td class="px-4 py-2 border">{{$datos->fechaInterven}}</td>
                                <td class="px-4 py-2 border">{{$datos->nomEstablecimiento}}</td>
                                {{-- @if (isset($datos->persona[0]->namecomplet))
                                    
                                @endif --}}
                                @if (isset($datos->persona[0]->namecomplet))
                                <td class="px-4 py-2 border">{{$datos->persona[0]->namecomplet }}</td>
                                <td class="px-4 py-2 border">{{$datos->persona[0]->dni}}</td>
                                @else
                                    <td class="px-4 py-2 border"></td>
                                    <td class="px-4 py-2 border"></td>
                                @endif
                                    
                                {{-- @foreach ($datos->persona as $item)
                                    <td class="px-4 py-2 border">{{$item->dni}}</td>    
                                @endforeach --}}
                                {{-- @foreach ($datos->persona as $datosp)
                                <td class="px-4 py-2 border">{{$datosp->dni}}</td>                            
                                @endforeach --}}
                                {{-- <td class="px-4 py-2 border">{{$datos->dni}}</td> --}}
                                </tr>
                            @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="overflow-auto">
                    
                    <table class="table-fixed w- full">
                        <thead>
                            <tr class="h-16 text-xs text-white bg-indigo-600">                         
                                <th class="px-4 py-2 ">DIRECCION DE ESTABLECIMIENTO</th>
                                <th class="px-4 py-2 ">DIRECCION LEGAL</th>
                                <th class="px-4 py-2 ">CODIGO 1 INFRIGIDO</th>
                                <th class="px-4 py-2 ">MULTA 01%UIT</th>
                                <th class="px-4 py-2 ">CODIGO 2 INFRIGIDO</th>
                                <th class="px-4 py-2 ">MULTA 02%UIT</th>
                                <th class="px-4 py-2 ">CODIGO 3 INFRIGIDO</th>
                                <th class="px-4 py-2 ">MULTA 03%UIT</th>
                                <th class="px-4 py-2 ">CODIGO 4 INFRIGIDO</th>
                                <th class="px-4 py-2 ">MULTA 04%UIT</th>
                                <th class="px-4 py-2 ">CODIGO 5 INFRIGIDO</th>
                                <th class="px-4 py-2 ">MULTA 05%UIT</th>
                                <th class="px-4 py-2 ">CODIGO 6 INFRIGIDO</th>
                                <th class="px-4 py-2 ">MULTA 06%UIT</th>
                                <th class="px-4 py-2 ">FISCALIZADOR/NOTIFICADOR Y/O POLICIA MUNICIPAL</th>
                                <th class="px-4 py-2 ">ACTA DE DECOMISO</th>
                                <th class="px-4 py-2 ">INFORME DE FISCALIZADOR</th>
                                <th class="px-4 py-2 ">FECHA DE INFORME DE FISCALIZADOR</th>
                                <th class="px-4 py-2 ">OBSERVACOINES</th>                                                   
                                <th class="px-4 py-2 ">DESCARGO</th>                        
                                <th class="px-4 py-2 ">DESCARGO REGISTRO N</th>                        
                                <th class="px-4 py-2 ">DATOS DEL SOLICITANTE</th>                        
                                <th class="px-4 py-2 ">FECHA DESCARGO</th>                        
                                <th class="px-4 py-2 ">INFORME A GTDE</th>                        
                                <th class="px-4 py-2 ">FECHA</th>                        
                                <th class="px-4 py-2 ">SE RESUELVE</th>                        
                                <th class="px-4 py-2 ">INFORME A GTDE</th>                        
                                <th class="px-4 py-2 ">FECHA</th>                        
                                <th class="px-4 py-2 ">RESOLUCION DE GTDE</th>                        
                                <th class="px-4 py-2 ">FECHA DE RESOLUCION</th>                        
                                <th class="px-4 py-2 ">SE RESUELVE</th>                        
                                <th class="px-4 py-2 ">TOTAL MULTA % UIT</th>                        
                                <th class="px-4 py-2 ">MONTO S/</th>                        
                                <th class="px-4 py-2 ">RECOSIDERACION REGISTRO N</th>                        
                                <th class="px-4 py-2 ">FECHA RECONSIDERACION</th>                        
                                <th class="px-4 py-2 ">RESOLUCION DE RECONSIDERACION DE GTDE</th>                        
                                <th class="px-4 py-2 ">FECHA DE RESOLUCION</th>                        
                                <th class="px-4 py-2 ">SE RESUELVE</th>                        
                                <th class="px-4 py-2 ">PAGO MULTA %</th>                        
                                <th class="px-4 py-2 ">TOTAL A PAGAR S/</th>                        
                                <th class="px-4 py-2 ">PAGO EFECTUADO</th>                         
                                <th class="px-4 py-2 ">PORCENTAJE DE PAGO</th>                        
                                <th class="px-4 py-2 ">COMPROBANTE DE PAGO N</th>                        
                                <th class="px-4 py-2 ">FECHA DE PAGO</th>                        
                                <th class="px-4 py-2 ">INFORME A DESPACHO DE ALCALDIA</th>                        
                                <th class="px-4 py-2 ">FECHA</th>                        
                                <th class="px-4 py-2 ">RESOLUCION DE GTDE</th>                        
                                <th class="px-4 py-2 ">FECHA</th>                        
                                <th class="px-4 py-2 ">RESUELVE</th>                        
                                <th class="px-4 py-2 ">ESTADO</th>                        
                                <th class="px-4 py-2 ">OBSERVACOINES</th>                        
                                <th class="px-4 py-2 ">CONSTANCIA PARA COACTIVO</th>                        
                                <th class="px-4 py-2 ">FECHA</th>                        
                                <th class="px-4 py-2 ">N EXP. SANCIONADOR SGAE EXP. EJEC. COACTIVO</th>                        
                                <th class="px-4 py-2 ">N RES DE OEC</th>                        
                                <th class="px-4 py-2 ">N DECRETO DE GTDE</th>                        
                                <th class="px-4 py-2 ">FOLIOS</th>                        
                                <th class="px-4 py-2 ">ACTAS ENTREGADO A FISCALIZACION SEGUN CUADERNO</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datosPapeletaDeInfraciones as $datos)
                            <tr class="h-20 text-xs">
                                <td class="px-4 py-2 border">{{$datos->dirEstablecimiento}}</td>
                                <td class="px-4 py-2 border">{{$datos->dirLegal}}</td>
                                @if (isset($datos->infracciondatos[0]->codigo))
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[0]->codigo}}</td>{{-- cod 1 --}}
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[0]->multa}}%</td>{{-- mult 1 --}}
                                @else
                                    <td class="px-4 py-2 border"></td>    
                                    <td class="px-4 py-2 border"></td>    
                                @endif
                                @if (isset($datos->infracciondatos[1]->codigo))
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[1]->codigo}}</td>{{-- cod 2 --}}
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[1]->multa}}%</td>{{-- mult 2 --}}
                                @else
                                    <td class="px-4 py-2 border"></td>    
                                    <td class="px-4 py-2 border"></td>    
                                @endif
                                @if (isset($datos->infracciondatos[2]->codigo))
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[2]->codigo}}</td>{{-- cod 3 --}}
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[2]->multa}}%</td>{{-- mult 3 --}}
                                @else
                                    <td class="px-4 py-2 border"></td>    
                                    <td class="px-4 py-2 border"></td>    
                                @endif
                                @if (isset($datos->infracciondatos[3]->codigo))
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[3]->codigo}}</td>{{-- cod 4 --}}
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[3]->multa}}%</td>{{-- mult 4 --}}
                                @else
                                    <td class="px-4 py-2 border"></td>    
                                    <td class="px-4 py-2 border"></td>    
                                @endif
                                @if (isset($datos->infracciondatos[4]->codigo))
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[4]->codigo}}</td>{{-- cod 5 --}}
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[4]->multa}}%</td>{{-- mult 5 --}}
                                @else
                                    <td class="px-4 py-2 border"></td>    
                                    <td class="px-4 py-2 border"></td>    
                                @endif
                                @if (isset($datos->infracciondatos[5]->codigo))
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[5]->codigo}}</td>{{-- cod 6 --}}
                                    <td class="px-4 py-2 border">{{$datos->infracciondatos[5]->multa}}%</td>{{-- mult 6 --}}
                                @else
                                    <td class="px-4 py-2 border"></td>    
                                    <td class="px-4 py-2 border"></td>    
                                @endif
                                
                                @if (isset($datos->persona[1]->namecomplet))
                                    <td class="px-4 py-2 border">{{$datos->persona[1]->namecomplet}}</td> {{-- fiscalizador/notificador  --}}
                                @else
                                    <td class="px-4 py-2 border"></td>
                                @endif
                                <td class="px-4 py-2 border">{{$datos->actaDecomiso}}</td>{{-- acta decomiso --}}
                                <td class="px-4 py-2 border">{{$datos->informeFisca}}</td>{{-- informe fiscalizador --}}
                                <td class="px-4 py-2 border">{{$datos->feInformeFisca}}</td>{{-- fecha informe--}}
                                <td class="px-4 py-2 border">{{$datos->observaciones}}</td>{{-- observaciones--}}
                                <td class="px-4 py-2 border">{{$datos->descargoNom}}</td>{{-- descargo --}}
                                <td class="px-4 py-2 border">{{$datos->descargoNum}}</td>{{-- n descargo --}}
                                @if (isset($datos->persona[2]->namecomplet))
                                    <td class="px-4 py-2 border">{{$datos->persona[2]->namecomplet}}</td>{{-- datos del solicitante --}}
                                @else
                                    <td class="px-4 py-2 border"></td>
                                @endif
                                <td class="px-4 py-2 border">{{$datos->descargoFech}}</td>{{-- fecha descargo --}}
                            
                                <td class="px-4 py-2 border">{{$datos->IGTDEinformeNum}}</td>{{-- informe a gtde --}}
                                <td class="px-4 py-2 border">{{$datos->IGTDEfecha}}</td>{{-- fecha --}}
                                <td class="px-4 py-2 border">{{$datos->IGTDEresuelve}}</td>{{-- se resuelve --}}
                                <td class="px-4 py-2 border">{{$datos->IGTDEinforme}}</td>{{-- informe a gtde--}}
                                <td class="px-4 py-2 border">{{$datos->IGTDEfecha2}}</td>{{-- fecha --}}
                                
                                <td class="px-4 py-2 border">{{$datos->resolGTDENum}}</td>{{-- resolucion a gtde--}}
                                <td class="px-4 py-2 border">{{$datos->resolFecha}}</td>{{-- fecha de resolucion --}}
                                <td class="px-4 py-2 border">{{$datos->resolResuelve}}</td>{{-- se resuelve--}}
                                <td class="px-4 py-2 border">{{$datos->resolTotMulta}}</td>{{-- total multa % uit --}}
                                <td class="px-4 py-2 border">{{$datos->resolMonto}}</td>{{-- monto s/--}}
                                
                                <td class="px-4 py-2 border">{{$datos->reconsRegisNum}}</td>{{-- reconsideracion registro N--}}
                                <td class="px-4 py-2 border">{{$datos->reconsFecha}}</td>{{-- fecha de reconsideracion --}}
                                <td class="px-4 py-2 border">{{$datos->resoReconGtdeNum}}</td>{{-- resolucion de reconsideracion de gtde --}}
                                <td class="px-4 py-2 border">{{$datos->resoReconFecha}}</td>{{-- recha de resolucion --}}
                                <td class="px-4 py-2 border">{{$datos->resReconResuelve}}</td>{{-- se resuelve --}}
                                <td class="px-4 py-2 border">{{$datos->resoReconPagoMulta}}</td>{{-- pago multa %--}}
                                <td class="px-4 py-2 border">{{$datos->resoReconTotPagar}}</td>{{-- total a pagar--}}
                                <td class="px-4 py-2 border"></td>{{-- pago efectuado --}}
                                <td class="px-4 py-2 border"></td>{{-- porcentaje de pago--}}
                                <td class="px-4 py-2 border"></td>{{-- comprobante de pago n--}}
                                <td class="px-4 py-2 border"></td>{{-- fecha de pago --}}
                                <td class="px-4 py-2 border">{{$datos->infDespaAlcaldia}}</td>{{-- informe a despacho de alcaldia--}}
                                <td class="px-4 py-2 border">{{$datos->infDespaFecha}}</td>{{-- fecha --}}
                                
                                <td class="px-4 py-2 border">{{$datos->apelaRegisGTDENum}}</td>{{-- resolucion de gtde--}}
                                <td class="px-4 py-2 border">{{$datos->apelaFecha}}</td>{{-- fecha--}}
                                <td class="px-4 py-2 border">{{$datos->apelaResuelve}}</td>{{-- resuelve --}}
                                <td class="px-4 py-2 border"></td>{{-- estado--}}
                                <td class="px-4 py-2 border">{{$datos->observaciones}}</td>{{-- observaciones--}}
                                <td class="px-4 py-2 border">{{$datos->constCoactivo}}</td>{{-- constancia para coactivo--}}
                                <td class="px-4 py-2 border"></td>{{-- fecha --}}
                                <td class="px-4 py-2 border"></td>{{-- n exp sancionador sgae--}}
                                <td class="px-4 py-2 border"></td>{{-- n res de oec --}}
                                <td class="px-4 py-2 border"></td>{{-- n decreto de gtde --}}
                                <td class="px-4 py-2 border"></td>{{-- folios --}}
                                <td class="px-4 py-2 border"></td>{{-- actas entregado --}}
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            
            </div>
            
        </div>
    </div>
</div>
