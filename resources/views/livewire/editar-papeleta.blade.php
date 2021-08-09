
<div class="fixed inset-0 z-10 overflow-y-auto duration-300 ease-out">
    <div class="flex justify-center min-h-screen px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:align-middle sm:h-screen"></span>
        <div class="inline-block mt-4 overflow-hidden overflow-y-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:align-middle md:max-w-screen-xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form action="">
                <span class="flex flex-row-reverse pt-2 pr-2">
                    <button wire:click.prevent="cerrarModal()" class="px-2 py-1 text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-full focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                </span>
                <div class="px-4 pt-0 pb-4 bg-white sm:p-6 sm:pb-4 sm:pt-0">
                    <div class="flex justify-between py-0 pt-2 mb-4 text-gray-400 border-t-2 border-b-2 border-gray-200 pd:mt-1">
                        <h4>DATOS GENERALES DE INFRACCION</h4>
                    </div>
                        <div class="gap-4 sm:grid-cols-2 sm:grid">
                            <div class="grid grid-cols-3 gap-2">
                                <div class="mb-4">
                                    <label for="estado" class="block mb-2 text-sm font-bold text-gring-gray-700">Estado</label>
                                    <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 border border-gray-600 rounded appearance-none bg-white-100 focus:outline-none focus:bg-white focus:border-gray-500" id="estado" wire:model="estado">
                                        <option value data-isdefault="true" style="display:none;">{{$estadotemp}}</option>
                                        <option class="uppercase" value="AGOTADO LA VIA ADMINISTRATIVA">AGOTADO LA VIA ADMINISTRATIVA</option>
                                        <option class="uppercase" value="Archivo Definitivo MEM">Archivo Definitivo MEM</option>
                                        <option class="uppercase"   value="Custodia GTDE">Custodia GTDE</option>
                                    </select>
                                    {{-- <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearace-none focus:outline-none focus:shadow-outline-none" ><span class="text-white">|</span>{{$estadoreg}}</p> --}}
                                    {{-- <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="estado" wire:model="estado"> --}}
                                </div>
                                <div class="">
                                    <label for="numActa" class="block mb-2 text-sm font-bold text-gring-gray-700">Numero de Acta</label>
                                    <p class="w-full h-10 px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" >{{$numActa}}</p>
                                    {{-- <input type="num" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="numActa" wire:model="numActa"> --}}
                                </div>
                                <div class="">                            
                                    <label for="fechaInterven" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha de intervencion</label>
                                    <p class="w-full h-10 px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" >{{$fechaInterven}}</p>
                                    {{-- <input type="date"  class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="fechaInterven" wire:model="fechaInterven"> --}}
                                </div>                        
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="propietario" class="block mb-2 text-sm font-bold text-gring-gray-700">Propietario</label>
                                    <p class="w-full h-10 px-3 py-2 leading-tight text-gray-700 uppercase border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$propNomCom}}</p>
                                    {{-- <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="propietario" wire:model="propietario"> --}}
                                </div>
                                <div class="mb-4">
                                    <label for="propietario" class="block mb-2 text-sm font-bold text-gring-gray-700">Direccion Propietario</label>
                                    <p class="w-full h-10 px-3 py-2 leading-tight text-gray-700 uppercase border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" >{{$propDirRea}}</p>
                                    {{-- <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="propietario" wire:model="propietario"> --}}
                                </div>
                                
                            </div>
                        </div>  
                        <div class="gap-4 sm:grid">
                            <div class="grid content-center grid-cols-3 gap-4">
                                
                                <div class="mb-4">
                                    <label for="nomEstablecimiento" class="block mb-2 text-sm font-bold text-gring-gray-700">Nombre de establecimiento</label>
                                    <p class="w-full h-10 px-3 py-2 leading-tight text-gray-700 uppercase border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" >{{$nomEstablecimiento}}</p>
                                    {{-- <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="nomEstablecimiento" wire:model="nomEstablecimiento"> --}}
                                </div>
                                <div class="mb-4">
                                    <label for="dirEstablecimiento" class="block mb-2 text-sm font-bold text-gring-gray-700">Direccion de establecimiento</label>
                                    <p class="w-full h-10 px-3 py-2 leading-tight text-gray-700 uppercase border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$dirEstablecimiento}}</p>
                                    {{-- <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="dirEstablecimiento" wire:model="dirEstablecimiento"> --}}
                                </div>
                                <div class="mb-4">
                                    <label for="uppercase dirLegal" class="block mb-2 text-sm font-bold text-gring-gray-700">Direccion de legal</label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="dirLegal" wire:model="dirLegal">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="grid content-center grid-cols-12 gap-1 py-6">
                                @if ($modInf1)
                                    <div class="">
                                        <h4  class="mb-2 text-sm font-bold text-gring-gray-700">Codigo 1 INF</h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$inf1}}</p>
                                    </div>
                                    <div class="">
                                        <h4  class="flex justify-between mb-2 text-sm font-bold text-gring-gray-700">
                                            <p>Multa 1</p>    
                                            {{-- <span class="flex flex-row-reverse ">
                                                <button wire:click.prevent="borrarInfraccion({{1}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                            </span> --}}
                                        </h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$multa1}}%</p>
                                    </div>                                                
                                @endif
                                @if ($modInf2)
                                    <div class="">
                                        <h4  class="mb-2 text-sm font-bold text-gring-gray-700">Codigo 2 INF</h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$inf2}}</p>
                                    </div>
                                    <div class="">
                                        <h4  class="flex justify-between mb-2 text-sm font-bold text-gring-gray-700">
                                            <p>Multa 2</p>    
                                            {{-- <span class="flex flex-row-reverse ">
                                                <button wire:click.prevent="borrarInfraccion({{2}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                            </span> --}}
                                        </h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$multa2}}%</p>
                                    </div>
                                @endif

                                @if ($modInf3)
                                    <div class="">
                                        <h4  class="mb-2 text-sm font-bold text-gring-gray-700">Codigo 3 INF</h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$inf3}}</p>
                                    </div>
                                    <div class="">
                                        <h4  class="flex justify-between mb-2 text-sm font-bold text-gring-gray-700">
                                            <p>Multa 3</p>    
                                            {{-- <span class="flex flex-row-reverse ">
                                                <button wire:click.prevent="borrarInfraccion({{3}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                            </span> --}}
                                        </h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$multa3}}%</p>
                                    </div>
                                @endif

                                @if ($modInf4)
                                    <div class="">
                                        <h4  class="mb-2 text-sm font-bold text-gring-gray-700">Codigo 4 INF</h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$inf4}}</p>
                                    </div>
                                    <div class="">
                                        <h4  class="flex justify-between mb-2 text-sm font-bold text-gring-gray-700">
                                            <p>Multa 4</p>    
                                            {{-- <span class="flex flex-row-reverse ">
                                                <button wire:click.prevent="borrarInfraccion({{4}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                            </span> --}}
                                        </h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$multa4}}%</p>
                                    </div>
                                @endif
                                @if ($modInf5)
                                    <div class="">
                                        <h4  class="mb-2 text-sm font-bold text-gring-gray-700">Codigo 5 INF</h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$inf5}}</p>
                                    </div>
                                    <div class="">
                                        <h4  class="flex justify-between mb-2 text-sm font-bold text-gring-gray-700">
                                            <p>Multa 5</p>    
                                            {{-- <span class="flex flex-row-reverse ">
                                                <button wire:click.prevent="borrarInfraccion({{5}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                            </span> --}}
                                        </h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$multa5}}%</p>
                                    </div>
                                @endif
                                @if ($modInf6)
                                    <div class="">
                                        <h4  class="mb-2 text-sm font-bold text-gring-gray-700">Codigo 6 INF</h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$inf6}}</p>
                                    </div>
                                    <div class="">
                                        <h4  class="flex justify-between mb-2 text-sm font-bold text-gring-gray-700">
                                            <p>Multa 6</p>    
                                            {{-- <span class="flex flex-row-reverse ">
                                                <button wire:click.prevent="borrarInfraccion({{6}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                            </span> --}}
                                        </h4>
                                        <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$multa6}}%</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="grid gap-4 sm:grid sm:grid-cols-3">
                            <div class="mb-4">
                                <label for="nFiscalizador" class="block mb-2 text-sm font-bold text-gring-gray-700">Fiscalizador notificador y/o policia municipal</label>
                                <p class="w-full h-10 px-10 py-2 leading-tight text-gray-700 uppercase rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$fiscNomCom}}</p>
                                {{-- <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" >-</p> --}}
                                {{-- <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="nFiscalizador" wire:model="nFiscalizador"> --}}
                            </div>
                            <div class="grid grid-cols-3 col-span-2 gap-4">
                                <div class="mb-4">
                                    <label for="actaDecomiso" class="block mb-2 text-sm font-bold text-gring-gray-700">Acta de decomiso</label>
                                    <p class="w-full h-10 px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">
                                    {{$actaDecomiso}}</p>
                                {{-- <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="actaDecomiso" wire:model="actaDecomiso"> --}}
                            </div>
                            <div class="mb-4">
                                <label for="informeFisca" class="block mb-2 text-sm font-bold text-gring-gray-700">Informe fiscalizador</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="informeFisca" wire:model="informeFisca">
                            </div>
                            <div class="mb-4">
                                <label for="feInformeFisca" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha de informe de fiscalizador</label>
                                <input type="date" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="feInformeFisca" wire:model="feInformeFisca">
                            </div>                        
                        </div>
                    </div>
                    <div class="flex justify-between py-0 pt-2 mt-1 mb-4 text-gray-400 border-t-2 border-b-2 border-gray-200">
                        <h4>DESCARGO</h4>
                        <button wire:click.prevent="abrirsegmento(2)" class="px-2 py-1 mb-2 text-white transition duration-150 ease-in-out bg-gray-600 border border-transparent rounded-md px-2mb-2 focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5"><i class="fas fa-chevron-down"></i></button>
                    </div>
                    @if ($div1)    
                        <div class="grid grid-cols-4 gap-4">
                            <div class="mb-4">
                                <label for="descNom" class="block mb-2 text-sm font-bold text-gring-gray-700">descargo</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="descNom" wire:model="descNom">
                            </div>
                            <div class="mb-4">
                                <label for="descNum" class="block mb-2 text-sm font-bold text-gring-gray-700">descargo registro Nro</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="descNum" wire:model="descNum">
                            </div>
                            <div class="mb-4">
                                <label for="soliNomCom" class="block mb-2 text-sm font-bold text-gring-gray-700">Datos Del Solicitante</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 uppercase border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="soliNomCom" wire:model="soliNomCom">
                            </div>
                            <div class="mb-4">
                                <label for="descFecha" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha de descargo</label>
                                <input type="date" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="descFecha" wire:model="descFecha">
                            </div>
                        </div>
                    @endif
                    <div class="flex justify-between py-0 pt-2 mt-1 mb-4 text-gray-400 border-t-2 border-b-2 border-gray-200">
                        <h4>INFORME GTDE</h4>
                        <button wire:click.prevent="abrirsegmento({{3}})" class="px-2 py-1 mb-2 text-white transition duration-150 ease-in-out bg-gray-600 border border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5"><i class="fas fa-chevron-down"></i></button>
                    </div>
                    @if ($div2)
                        <div class="grid grid-cols-4 gap-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="IGTDEinforNum" class="block mb-2 text-sm font-bold text-gring-gray-700">Informe a GTDE</label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="IGTDEinforNum" wire:model="IGTDEinforNum">
                                </div>
                                <div class="mb-4">
                                    <label for="IGTDEfe1" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha</label>
                                    <input type="date" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="IGTDEfe1" wire:model="IGTDEfe1">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="IGTDEresuelve" class="block mb-2 text-sm font-bold text-gring-gray-700">Se resuelve</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="IGTDEresuelve" wire:model="IGTDEresuelve">
                            </div>
                            <div class="mb-4">
                                <label for="IGTDEinforme" class="block mb-2 text-sm font-bold text-gring-gray-700">Informe a GTDE</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="IGTDEinforme" wire:model="IGTDEinforme">
                            </div>
                            <div class="mb-4">
                                <label for="IGTDEfe2" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha</label>
                                <input type="date" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="IGTDEfe2" wire:model="IGTDEfe2">
                            </div>
                        </div>
                    @endif
                    <div class="flex justify-between py-0 pt-2 mt-1 mb-4 text-gray-400 border-t-2 border-b-2 border-gray-200">
                        <h4>RESOLUCION GTDE</h4>
                        <button wire:click.prevent="abrirsegmento({{4}})" class="px-2 py-1 mb-2 text-white transition duration-150 ease-in-out bg-gray-600 border border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5"><i class="fas fa-chevron-down"></i></button>
                    </div>
                    @if ($div3)
                        <div class="grid grid-cols-5 gap-4">
                            <div class="mb-4">
                                <label for="resolNum" class="block mb-2 text-sm font-bold text-gring-gray-700">Resolucion de GTDE N°</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="resolNum" wire:model="resolNum">
                            </div>
                            <div class="mb-4">
                                <label for="resolFe" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha de Resolucion</label>
                                <input type="date" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="resolFe" wire:model="resolFe">
                            </div>
                            <div class="mb-4">
                                <label for="resolResuelve" class="block mb-2 text-sm font-bold text-gring-gray-700">Se resuelve</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="resolResuelve" wire:model="resolResuelve">
                            </div>
                            <div class="mb-4">
                                <label for="resolTotMul" class="block mb-2 text-sm font-bold text-gring-gray-700">Total Multa % UIT</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="resolTotMul" wire:model="resolTotMul">
                            </div>
                            <div class="mb-4">
                                <label for="resolMonto" class="block mb-2 text-sm font-bold text-gring-gray-700">Monto</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="resolMonto" wire:model="resolMonto">
                            </div>
                        </div>
                    @endif
                    <div class="flex justify-between py-0 pt-2 mt-1 mb-4 text-gray-400 border-t-2 border-b-2 border-gray-200">
                        <h4>RECONSIDERACION</h4>
                        <button wire:click.prevent="abrirsegmento({{5}})" class="px-2 py-1 mb-2 text-white transition duration-150 ease-in-out bg-gray-600 border border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5"><i class="fas fa-chevron-down"></i></button>
                    </div>
                    @if ($div4)
                        <div class="grid grid-cols-1 gap-4">
                            <div class="grid grid-cols-4 gap-4">
                                <div class="mb-4">
                                    <label for="recNum" class="block mb-2 text-sm font-bold text-gring-gray-700">Reconsideracion registro N°</label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="recNum" wire:model="recNum">
                                </div>
                                <div class="mb-4">
                                    <label for="recFe" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha de reconsideracion</label>
                                    <input type="date" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="recFe" wire:model="recFe">
                                </div>
                                <div class="mb-4">
                                    <label for="resRecNum" class="block mb-2 text-sm font-bold text-gring-gray-700">Resolucion de reconsideracion de GTDE N°</label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="resRecNum" wire:model="resRecNum">
                                </div>
                                <div class="mb-4">
                                    <label for="resRecFe" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha de resolucion</label>
                                    <input type="date" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="resRecFe" wire:model="resRecFe">
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-4">
                                <div class="mb-4">
                                    <label for="resRecRes" class="block mb-2 text-sm font-bold text-gring-gray-700">Se resuelve</label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="resRecRes" wire:model="resRecRes">
                                </div>
                                <div class="mb-4">
                                    <label for="resRecPagMul" class="block mb-2 text-sm font-bold text-gring-gray-700">Pago de Multa</label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="resRecPagMul" wire:model="resRecPagMul">
                                </div>
                                <div class="mb-4">
                                    <label for="resRecTotPag" class="block mb-2 text-sm font-bold text-gring-gray-700">Total a pagar</label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="resRecTotPag" wire:model="resRecTotPag">
                                </div>
                            </div>
                        </div>
                        
                    @endif
                    <div class="flex justify-between py-0 pt-2 mt-1 mb-4 text-gray-400 border-t-2 border-b-2 border-gray-200">
                        <h4>ALCALDIA</h4>
                        <button wire:click.prevent="abrirsegmento({{6}})" class="px-2 py-1 mb-2 text-white transition duration-150 ease-in-out bg-gray-600 border border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5"><i class="fas fa-chevron-down"></i></button>
                    </div>
                    @if ($div5)
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="infoDesAlcaldia" class="block mb-2 text-sm font-bold text-gring-gray-700">Informe a despacho alcaldia</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="infoDesAlcaldia" wire:model="infoDesAlcaldia">
                            </div>
                            <div class="mb-4">
                                <label for="infoDesFe" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha</label>
                                <input type="date" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="infoDesFe" wire:model="infoDesFe">
                            </div>
                        </div>
                        
                    @endif
                    <div class="flex justify-between py-0 pt-2 mt-1 mb-4 text-gray-400 border-t-2 border-b-2 border-gray-200">
                        <h4>APELACION</h4>
                        <button wire:click.prevent="abrirsegmento({{7}})" class="px-2 py-1 mb-2 text-white transition duration-150 ease-in-out bg-gray-600 border border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5"><i class="fas fa-chevron-down"></i></button>
                    </div>
                    @if ($div6)
                        <div class="grid grid-cols-2 gap-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="apNum" class="block mb-2 text-sm font-bold text-gring-gray-700">Resolucion de GTDE</label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="apNum" wire:model="apNum">
                                </div>
                                <div class="mb-4">
                                    <label for="apFe" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha</label>
                                    <input type="date" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="apFe" wire:model="apFe">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="apRes" class="block mb-2 text-sm font-bold text-gring-gray-700">Resuelve</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="apRes" wire:model="apRes">
                            </div>

                        </div>              
                    @endif
                    <div class="flex justify-between py-0 pt-2 mt-1 mb-4 text-gray-400 border-t-2 border-b-2 border-gray-200">
                        <h4>FASE FINAL</h4>
                        <button wire:click.prevent="abrirsegmento({{8}})" class="px-2 py-1 mb-2 text-white transition duration-150 ease-in-out bg-gray-600 border border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5"><i class="fas fa-chevron-down"></i></button>
                    </div>
                    {{-- <div class="mb-4">
                        <label for="ifi_fiGTDE" class="block mb-2 text-sm font-bold text-gring-gray-700">ESTADO</label>
                        <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="ifi_fiGTDE" wire:model="ifi_fiGTDE">
                    </div> --}}
                    @if ($div7)
                        <div class="grid grid-cols-1">
                            <div class="grid grid-cols-4 gap-4">
                                {{-- <div class="mb-4">
                                    <label for="ifi_fiGTDE" class="block mb-2 text-sm font-bold text-gring-gray-700">Observaciones Davis </label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="ifi_fiGTDE" wire:model="ifi_fiGTDE">
                                </div> --}}
                                <div class="mb-4">
                                    <label for="ifi_fiGTDE" class="block mb-2 text-sm font-bold text-gring-gray-700">Constancia para coactivo</label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="ifi_fiGTDE" wire:model="ifi_fiGTDE">
                                </div>
                                <div class="mb-4">
                                    <label for="ifi_fiGTDE" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha</label>
                                    <input type="date" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="ifi_fiGTDE" wire:model="ifi_fiGTDE">
                                </div>
                                {{-- <div class="mb-4">
                                    <label for="ifi_fiGTDE" class="block mb-2 text-sm font-bold text-gring-gray-700">N° Exp. sancionador SGAE EXP. E. Coactiva </label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="ifi_fiGTDE" wire:model="ifi_fiGTDE">
                                </div> --}}
                            </div>
                            {{-- <div class="grid grid-cols-4 gap-4">
                                <div class="mb-4">
                                    <label for="ifi_fiGTDE" class="block mb-2 text-sm font-bold text-gring-gray-700">N° Res. de O.E.C. </label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="ifi_fiGTDE" wire:model="ifi_fiGTDE">
                                </div>
                                <div class="mb-4">
                                    <label for="ifi_fiGTDE" class="block mb-2 text-sm font-bold text-gring-gray-700">N° de decreto de GTDE </label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="ifi_fiGTDE" wire:model="ifi_fiGTDE">
                                </div>
                                <div class="mb-4">
                                    <label for="ifi_fiGTDE" class="block mb-2 text-sm font-bold text-gring-gray-700">Folios </label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="ifi_fiGTDE" wire:model="ifi_fiGTDE">
                                </div>
                                <div class="mb-4">
                                    <label for="ifi_fiGTDE" class="block mb-2 text-sm font-bold text-gring-gray-700">ACTAS ENTREGADO A FISCALIZACION SEGÚN CUADERNO</label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="ifi_fiGTDE" wire:model="ifi_fiGTDE">
                                </div>
                                <div class="mb-4">
                                    <label for="ifi_fiGTDE" class="block mb-2 text-sm font-bold text-gring-gray-700">Observacion  </label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="ifi_fiGTDE" wire:model="ifi_fiGTDE">
                                </div>
                            </div> --}}
                        </div>
                    @endif
                        
                    <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="guardarPapeleta()" class="inline-flex justify-center w-full px-4 py-2 text-white transition duration-150 ease-in-out bg-purple-800 border border-transparent rounded-md focus:outline-none focus:border-green-700 focus:shadow-outline-green sm:text-sm sm:leading-5">Guardar</button>
                        </span>
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="cerrarModal()" class="inline-flex justify-center w-full px-4 py-2 text-white transition duration-150 ease-in-out bg-purple-800 border border-transparent rounded-md focus:outline-none focus:border-green-700 focus:shadow-outline-green sm:text-sm sm:leading-5">Cancelar</button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
