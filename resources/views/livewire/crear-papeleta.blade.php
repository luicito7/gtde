<div class="fixed inset-0 overflow-y-auto duration-300 ease-out z-5">
    <div class="flex justify-center min-h-screen px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:align-middle sm:h-screen"></span>
        <div class="inline-block mt-4 overflow-hidden overflow-y-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:align-middle md:max-w-screen-xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form action="">
                <span class="flex flex-row-reverse pt-2 pr-2">
                    <button wire:click.prevent="cerrarModal1()" class="px-2 py-1 text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-full focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                </span>
                <div class="px-4 pt-0 pb-4 bg-white sm:p-6 sm:pb-4 sm:pt-0">
                        <div class="gap-4 sm:grid-cols-2 sm:grid">
                            <div class="grid grid-cols-3 gap-2">
                                <div class="mb-4">
                                    <div class="relative">
                                        <label for="estado" class="block mb-2 text-sm font-bold text-gring-gray-700">Estado</label>
                                        <h3 class="w-full h-10 p-2 font-bold leading-tight text-green-400 uppercase border rounded shadow appearance-none focus-within:px-3 focus:outline-none focus:shadow-outline-none" id="estado">{{$estado}}</h3>
                                    @error('estado')
                                        <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                            {{$message}}
                                        </span>                                        
                                    @enderror
                                    </div>
                                </div>
                                <div class="">
                                    <label for="numActa" class="block mb-2 text-sm font-bold text-gring-gray-700">Numero de Acta</label>
                                    <input type="number" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none border-black-600 focus:outline-none focus:shadow-outline-none" id="numActa" wire:model="numActa">
                                    @error('numActa')
                                        <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                            {{$message}}
                                        </span>                                        
                                    @enderror
                                </div>
                                <div class="">                            
                                    <label for="fechaInterven" class="block mb-2 text-sm font-bold text-gring-gray-700">Fecha de intervencion</label>
                                    <input type="date"  class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="fechaInterven" wire:model="fechaInterven">
                                    @error('fechaInterven')
                                        <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                            {{$message}}
                                        </span>                                        
                                    @enderror
                                </div>                        
                            </div>
                        </div>
                        <div class="flex justify-between py-0 pt-2 mb-4 text-gray-400 border-t-2 border-b-2 border-gray-200 pd:mt-1">
                            <h4>DATOS DEL INFRACTOR</h4>
                        </div>
                        <div class="grid grid-cols-12 gap-4 mb-4">
                            <div class="col-span-1">
                                <label for="" class="block mb-2 text-sm font-bold text-gring-gray-700">Propietario</label>
                                <div class="grid grid-cols-1 gap-2">
                                    <button wire:click.prevent="registrarBuscar({{0}})" class="px-3 py-2 text-black transition duration-150 ease-in-out bg-gray-200 border-2 border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5">Buscar</button>    
                                </div>
                            </div>
                            
                            <div class="col-span-2">
                                <label for="propDni" class="block mb-2 text-sm font-bold text-gring-gray-700">DNI Del Propietario</label>
                                <h3 type="text" class="w-full h-10 px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="propDni">{{$propDni}}</h3>
                                @error('propDni')
                                    <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{$message}}
                                    </span>                                        
                                @enderror
                            </div>
                            <div class="col-span-4">
                                <label for="propNomCom" class="block mb-2 text-sm font-bold text-gring-gray-700">Nombre propietario</label>
                                <h3 type="text" class="w-full h-10 px-3 py-2 leading-tight text-gray-700 uppercase border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="propNomCom" >{{$propNomCom}}</h3>
                                @error('propNomCom')
                                    <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{$message}}
                                    </span>                                        
                                @enderror
                            </div>
                            <div class="col-span-5">
                                <label for="propDirRea" class="block mb-2 text-sm font-bold text-gring-gray-700">Direccion del propietario</label>
                                <h3 type="text" class="w-full h-10 px-3 py-2 leading-tight text-gray-700 uppercase border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="propDirRea" >{{$propDirRea}}</h3>
                                @error('propNomCom')
                                    <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{$message}}
                                    </span>                                        
                                @enderror
                            </div>
                        </div>      
                        @if ($modalBPersona)
                            @include('livewire.modal-buscar-persona')
                        @endif
                        @if ($modalPInfraccion)
                            @include('livewire.crear-personas')
                        @endif
                        @if ($modalMulta)
                            @include('livewire.modal-multa')
                        @endif
                        <div class="flex justify-between py-0 pt-2 text-gray-400 border-t-2 border-b-2 border-gray-200 pd:mt-1">
                            <h4>DATOS DEL ESTABLECIMIENTO</h4>
                        </div>
                        <div class="gap-4 sm:grid">
                            <div class="grid content-center grid-cols-3 gap-4 mt-4">
                                
                                <div class="mb-4">
                                    <label for="nomEstablecimiento" class="block mb-2 text-sm font-bold text-gring-gray-700">Nombre de establecimiento</label>
                                    <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 uppercase border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="nomEstablecimiento" wire:model="nomEstablecimiento">
                                    @error('nomEstablecimiento')
                                        <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                            {{$message}}
                                        </span>                                        
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="dirEstablecimiento" class="block mb-2 text-sm font-bold text-gring-gray-700">Direccion de establecimiento</label>
                                 <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 uppercase border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="dirEstablecimiento" wire:model="dirEstablecimiento">
                                    @error('dirEstablecimiento')
                                        <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                            {{$message}}
                                        </span>                                        
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="dirLegal" class="block mb-2 text-sm font-bold text-gring-gray-700">Direccion de legal</label>
                                 <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 uppercase border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="dirLegal" wire:model="dirLegal">
                                    @error('dirLegal')
                                        <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                            {{$message}}
                                        </span>                                        
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between py-0 pt-2 text-gray-400 border-t-2 border-b-2 border-gray-200 pd:mt-1">
                            <h4>MULTA</h4>
                        </div>
                        <div class="grid content-center grid-cols-12 gap-1 py-4">
                            <div class="">
                                <label for="" class="block mb-2 text-sm font-bold text-gring-gray-700">Multa</label>
                                <div class="grid grid-cols-1 gap-2">
                                    <button wire:click.prevent="abrirModalMulta()" class="px-3 py-2 text-black transition duration-150 ease-in-out bg-gray-200 border-2 border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5">Buscar</button>    
                                </div>
                            </div>
                            @if ($modInf1)
                                <div class="">
                                    <h4  class="mb-2 text-sm font-bold text-gring-gray-700">Codigo 1 INF</h4>
                                    <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$inf1}}</p>
                                </div>
                                <div class="">
                                    <h4  class="flex justify-between mb-2 text-sm font-bold text-gring-gray-700">
                                        <p>Multa 1</p>    
                                        <span class="flex flex-row-reverse ">
                                            <button wire:click.prevent="borrarInfraccion({{1}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                        </span>
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
                                        <span class="flex flex-row-reverse ">
                                            <button wire:click.prevent="borrarInfraccion({{2}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                        </span>
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
                                        <span class="flex flex-row-reverse ">
                                            <button wire:click.prevent="borrarInfraccion({{3}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                        </span>
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
                                        <span class="flex flex-row-reverse ">
                                            <button wire:click.prevent="borrarInfraccion({{4}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                        </span>
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
                                        <span class="flex flex-row-reverse ">
                                            <button wire:click.prevent="borrarInfraccion({{5}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                        </span>
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
                                        <span class="flex flex-row-reverse ">
                                            <button wire:click.prevent="borrarInfraccion({{6}})" class="text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-t-2x1 focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                                        </span>
                                    </h4>
                                    <p class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none">{{$multa6}}%</p>
                                </div>
                            @endif
                        </div>
                        <div class="flex justify-between py-0 pt-2 mb-4 text-gray-400 border-t-2 border-b-2 border-gray-200 pd:mt-1">
                            <h4>DATOS FISCALIZACION</h4>
                        </div>
                        <div class="gap-4 sm:grid sm:grid-cols-12">
                            <div class="">
                                <label for="" class="block mb-2 text-sm font-bold text-gring-gray-700">Fiscalizador</label>
                                <div class="grid grid-cols-1 gap-2">
                                    <button wire:click.prevent="registrarBuscar({{1}})" class="px-3 py-2 text-black transition duration-150 ease-in-out bg-gray-200 border border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5">Buscar</button>    
                                </div>
                            </div>   
                            
                            <div class="col-span-6">
                                <label for="fiscNomCom" class="block mb-2 text-sm font-bold text-gring-gray-700">Fiscalizador notificador y/o policia municipal</label>
                                <input type="text" class="w-full h-10 px-3 py-2 leading-tight text-gray-700 uppercase border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="fiscNomCom" wire:model="fiscNomCom">
                                @error('fiscNomCom')
                                    <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{$message}}
                                    </span>                                        
                                @enderror
                            </div>
                            <div class="col-span-5">
                                <label for="actaDecomiso" class="block mb-2 text-sm font-bold text-gring-gray-700">Acta de decomiso</label>
                                <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-none" id="actaDecomiso" wire:model="actaDecomiso">
                                @error('actaDecomiso')
                                    <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{$message}}
                                    </span>                                        
                                @enderror
                            </div>
                        </div>
                            
                        
                    </div>
                        
                    <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="crearPapeleta()" class="inline-flex justify-center w-full px-4 py-2 text-white transition duration-150 ease-in-out bg-purple-800 border border-transparent rounded-md focus:outline-none focus:border-green-700 focus:shadow-outline-green sm:text-sm sm:leading-5">Guardar</button>
                        </span>
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="cerrarModal1()" class="inline-flex justify-center w-full px-4 py-2 text-white transition duration-150 ease-in-out bg-purple-800 border border-transparent rounded-md focus:outline-none focus:border-green-700 focus:shadow-outline-green sm:text-sm sm:leading-5">Cancelar</button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

