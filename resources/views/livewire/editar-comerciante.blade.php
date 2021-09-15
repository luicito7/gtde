<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0" >
    
        <div class="fixed inset-y-0 w-full transition-opacity right-4">
            <div class="absolute inset-0 bg-gray-500 opacity-75" ></div>   {{--aqui para el fondo --}}
        </div>
          

               <span class="hidden sm:inline-block sm:align-middle sm:h-screen " ></span>

            
              <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:max-w-4xl sm:my-8 sm:align-middle" role="dialog" aria-modal="true" aria-labelledby="modal-headline" > <style> body {overflow-y:hidden;}</style>
  
                <form>

                  <span class="flex flex-row-reverse pt-2 pr-2 bg-yellow-50">
                    <button wire:click.prevent="cerrarModal2()" class="px-2 py-1 text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-full focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                  </span>
              
                    <div class="px-4 pt-5 pb-4 bg-yellow-50 sm:p-6 sm:pb-4" >


                      <div class="flex items-center justify-between gap-4 mb-4 "> 
                            <div class="col-span-1">
                                <label for="" class="block mb-2 text-sm font-bold text-gring-gray-700">Datos DNI Comerciante</label>
                                    <div class="grid grid-cols-1 gap-2">
                                        <button wire:click.prevent="registrarBuscar({{0}})" class="py-2 text-black transition duration-150 ease-in-out bg-gray-200 border-2 border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5">Buscar</button>
                                      </div>
                                </div>
                                          <div class="col-span-1">
                                              <div class="">
                                              <label for="" class="block px-5 mb-2 text-sm font-bold text-gring-gray-700">Datos Asociación</label>
                                              <div class="grid grid-cols-1 gap-2">
                                                  <button wire:click.prevent="registrarBuscaraso({{0}})" class="py-2 text-black transition duration-150 ease-in-out bg-gray-200 border border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5">Buscar</button>
                                              </div>
                                          </div>
                                  </div>
                         </div>


                         
                         @if ($modalBPersona)
                         @include('livewire.modal-buscar-persona')
                         @endif

                         @if ($modalPInfraccion)
                         @include('livewire.crear-personas')
                         @endif
  
                         @if ($modalBAsociacion)
                         @include('livewire.modal-buscar-associations')
                         @endif
                      
                        
                        <div class="flex flex-wrap -mx-3">
                          

                              <div class="w-full px-3 md:w-1/2 md:mb-0">
                                <label for="dnicomer" class="block text-xs font-bold tracking-wide text-gray-700 uppercase" >
                                  DNI 
                                </label>
                                <h3 type="text" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none h-11 focus:outline-none focus:bg-white" id="dnicomer" placeholder="DNI obligatorio" > {{$dnicomer}} </h3>
                                @error('dnicomer')
                                <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                    {{$message}}
                                </span>
                                  @enderror
                              </div>


                            <div class="w-full px-3 mb-6 md:w-1/2">
                              
                              <label for="asociacion" class="block text-xs font-bold tracking-wide text-gray-700 uppercase" >
                                ASOCIACIÓN 
                              </label>
                              <h3 type="text" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none h-11 focus:outline-none focus:bg-white" id="asociacion"> {{$asociacion}} </h3>
                            
                            </div>                                     
                          </div>

                          {{-- nombrecomplet --}}

                          <div>
                            <div class="flex flex-wrap mb-6">
                            <div class="w-full ">
                              <label for="nombrecomplet" class="block text-xs font-bold tracking-wide text-gray-700 uppercase" >
                                NOMBRE COMPLETO 
                              </label>
                              <h3 type="text" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none h-11 focus:outline-none focus:bg-white" id="nombrecomplet" > {{$nombrecomplet}} </h3>
                          
                            </div>
                           </div>  
                          </div> 
                          
  
                         {{-- INICIO  --}}
                          <div class="flex flex-wrap mb-6 -mx-3">
                            <div class="w-full px-3 md:w-1/2 md:mb-0">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="puesto">
                                PUESTO
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="puesto" type="text" wire:model="puesto">
                            </div>
                            

                            {{-- <div class="w-full px-3 md:w-1/3 md:mb-0"> 
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="nombres">
                                poner algo
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="nombres" type="text" wire:model="nombres">
                           </div>
                            --}}
                            <div class="w-full px-3 md:w-1/2 md:mb-0">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="rubro1">
                                RUBRO PRINCIPAL
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="rubro1" type="text" wire:model="rubro1">
                            </div>
                           </div>
                           
                              {{-- final --}}
                          
                              <div class="flex flex-wrap mb-6 -mx-3">
                                <div class="w-full px-3 md:w-1/3 md:mb-0">
                                  <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="rubro2">
                                    RUBRO SECUNDARIO
                                  </label>
                                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="rubro2" type="text" wire:model="rubro2">
                                </div>
                                
                                <div class="w-full px-3 md:w-1/3 md:mb-0">
                                  <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="mercado">
                                    MERCADO
                                  </label>
                                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="mercado" type="text" wire:model="mercado">
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                    </div>
                                </div>
                                
                                <div class="w-full px-3 md:w-1/3 md:mb-0">
                                  <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="dimpuesto">
                                    DIMENSIONES PUESTO
                                  </label>
                                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="dimpuesto" placeholder="Largo x Ancho x Alto" type="text" wire:model="dimpuesto">
                                </div>
                               </div>

                               <div class="flex flex-wrap mb-6 -mx-3">
                                <div class="w-full px-3 md:w-1/3 md:mb-0">
                                  <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="fotopuesto">
                                    FOTO PUESTO
                                  </label>
                                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="fotopuesto" type="file" wire:model="fotopuesto">
                                  @error('fotopuesto')
                                    <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{$message}}
                                    </span>
                                  @enderror
                                </div>
      
                                <div class="w-full px-3 md:w-1/3 md:mb-0">
                                  <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="tipocomer">
                                    TIPO COMERCIO
                                  </label>
                                  <div class="relative">
                                    <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="tipocomer" wire:model="tipocomer" required atribute>
                                      <option value data-isdefault="true" style="display:none;">Seleccione</option>
                                      <option value="mayorista">Mayorista</option>
                                      <option value="minorista">Minorista</option>
                                      <option value="mixto">Mixto</option>
                                    </select>
                                  </div>
                                </div>
      
                                <div class="w-full px-3 md:w-1/3 md:mb-0">
                                  <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="numpadron">
                                    NUMERO PADRON
                                  </label>
                                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="distrito" type="number" wire:model="numpadron">
                                  <style>
                                    input[type=number]::-webkit-inner-spin-button, 
                                      input[type=number]::-webkit-outer-spin-button { 
                                        -webkit-appearance: none; 
                                        margin: 0; 
                                      }
                                      input[type=number] { -moz-appearance:textfield; }
                                  </style>
                                </div>
                               </div>
  
                            {{-- OTRO FORM  --}}

                              <div>
                                <div class="flex flex-wrap -mx-3">
                                <div class="w-full px-3">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="observaciones">
                                 OBSERVACIONES</label>
                                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="observaciones" type="texto" wire:model="observaciones">
                                </div>
                              </div>  
                          </div>   
                    </div>
                  
                        <div class="px-4 py-3 bg-yellow-50 sm:px-6 sm:flex sm:flex-row-reverse">
                            
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal2()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-red-600 border border-gray-300 rounded-md shadow-sm hover:bg-red-800 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                            
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="modificar()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-purple-600 border border-transparent rounded-md shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green sm:text-sm sm:leading-5">Guardar</button>
                            </span>
  
                        </div>
  
                    </div>
                </form>    
            </div>
    </div>
  </div>
