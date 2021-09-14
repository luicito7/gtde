<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0" >
    
        <div class="fixed inset-y-0 w-full transition-opacity right-4">
            <div class="absolute inset-0 bg-gray-500 opacity-75" ></div>   {{--aqui para el fondo --}} 
        </div>
  
               <span class="hidden sm:inline-block sm:align-middle sm:h-screen " ></span>
               
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:max-w-4xl sm:my-8 sm:align-middle sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline" > <style> body {overflow-y:hidden;}</style>  {{-- tamaño de modal sm:max-w-4xl sm:my-8 sm:align-middle sm:w-full --}}
              
    

              <form>

                <span class="flex flex-row-reverse pt-2 pr-2 bg-yellow-50">
                  <button wire:click.prevent="cerrarModal()" class="px-2 py-1 text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-full focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                </span>

                  <div class="px-4 pt-5 pb-4 bg-yellow-50 sm:p-6 sm:pb-4" >


                              <div class="flex items-center justify-between gap-4 mb-4 ">

                                   <div class="col-span-1">
                                        <label for="" class="block mb-2 text-sm font-bold text-gring-gray-700">Datos DNI Representate</label>
                                            <div class="grid grid-cols-1 gap-2">
                                               <button wire:click.prevent="registrarBuscar({{0}})" class="py-2 text-black transition duration-150 ease-in-out bg-gray-200 border-2 border-transparent border-blue-300 rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5">Buscar</button>
                                             </div>
                                        </div>
                                                  <div class="col-span-2">
                                                     <div class="">
                                                      <label for="" class="block px-3 mb-2 text-sm font-bold text-gring-gray-700">Datos DNI Delegado</label>
                                                      <div class="grid grid-cols-1 gap-2">
                                                          <button wire:click.prevent="registrarBuscaraso({{0}})" class="py-2 text-black transition duration-150 ease-in-out bg-gray-200 border-2 border-transparent border-red-200 rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5">Buscar</button>
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
                           

                              
                            {{-- inicio fila 1  dni representate, dni delegado --}}
                          <div class="flex flex-wrap -mx-3">

                                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                  <label for="dni" class="block text-xs font-bold tracking-wide text-gray-700 uppercase" >
                                    DNI 
                                  </label>
                                  <h3 type="text" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none h-11 focus:outline-none focus:bg-white" id="dni" laceholder="DNI obligatorio" > {{$dni}} </h3>
                                  @error('dni')
                                  <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                      {{$message}}
                                  </span>
                                    @enderror
                                </div>

                                <div class="w-full px-3 mb-6 md:w-1/2">

                                  <label for="asociacion" class="block text-xs font-bold tracking-wide text-gray-700 uppercase" >
                                    ASOCIACIÓN 
                                  </label>
                                  <h3 type="text" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-red-300 rounded appearance-none h-11 focus:outline-none focus:bg-white" id="asociacion"> {{$asociacion}} </h3>

                                @error('asociacion')
                                <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                    {{$message}}
                                </span>
                                @enderror
                             
                            </div>

                             </div>
                                <div class="flex flex-wrap -mx-3">
                                  <div class="w-full px-3 mb-6">

                                    <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="nombrecomplet">
                                      NOMBRE COMPLETO
                                    </label>
                                    <h4 type="text" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none h-11 focus:outline-none focus:bg-white focus:border-gray-500" id="nombrecomplet" > {{$nombrecomplet}} </h4>
                                
                                  </div>
                              
              

                           {{-- fin de primera fila dni representate dni delegafo --}}

                          <div class="w-full px-3 mb-6 md:w-1/2">
                            <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="ubicacion">
                             UBICACIÓN
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="ubicacion" type="text" wire:model="ubicacion">
                         </div>


                            <div class="w-full px-3 mb-6 md:w-1/2">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="rubro">
                                RUBO
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="rubro" type="text" wire:model="rubro">
                            </div>

                        </div>

                          {{-- OTRO FORM  --}}
                         <div class="flex flex-wrap -mx-3">
                          <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                            <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="zona">
                              ZONA
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="zona" type="text" wire:model="zona">
                            </div>

                          <div class="w-full px-3 md:w-1/2 md:mb-0">
                             <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="numpadron">
                               NUMERO DE PADRON
                             </label>
  
                             <input class="block w-full px-4 py-3 mb-6 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="numpadron" type="number" wire:model="numpadron">
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
                              <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-red-600 border border-gray-300 rounded-md shadow-sm hover:bg-red-800 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">Cancelar</button>
                          </span>

                          <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                              <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-purple-600 border border-transparent rounded-md shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green sm:text-sm sm:leading-5">Guardar</button>
                          </span>

                      </div>

                  </div>
              </form>

            </div>
    </div>
  </div>