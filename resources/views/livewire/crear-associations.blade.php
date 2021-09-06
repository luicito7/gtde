<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
  <div class="flex justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0" >

      <div class="fixed inset-y-0 w-full transition-opacity right-4">
          <div class="absolute inset-0 bg-gray-500 opacity-75" ></div>   {{--aqui para el fondo --}}
      </div>

             <span class="hidden sm:inline-block sm:align-middle sm:h-screen " ></span>

          <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:max-w-4xl sm:my-8 sm:align-middle" role="dialog" aria-modal="true" aria-labelledby="modal-headline" > <style> body {overflow-y:hidden;}</style>

              <form>

                <span class="flex flex-row-reverse pt-2 pr-2 bg-yellow-50">
                  <button wire:click.prevent="cerrarModal1()" class="px-2 py-1 text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-full focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                </span>

                  <div class="px-4 pt-5 pb-4 bg-yellow-50 sm:p-6 sm:pb-4" >


                              <div class="flex items-center justify-between gap-4 mb-4 ">

                                   <div class="col-span-1">
                                        <label for="" class="block mb-2 text-sm font-bold text-gring-gray-700">Datos DNI Representate</label>
                                            <div class="grid grid-cols-1 gap-2">
                                               <button wire:click.prevent="registrarBuscar({{0}})" class="py-2 text-black transition duration-150 ease-in-out bg-gray-200 border-2 border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5">Buscar</button>
                                             </div>
                                        </div>
                                                  <div class="col-span-2">
                                                     <div class="">
                                                      <label for="" class="block px-3 mb-2 text-sm font-bold text-gring-gray-700">Datos DNI Delegado</label>
                                                      <div class="grid grid-cols-1 gap-2">
                                                          <button wire:click.prevent="registrarBuscar({{1}})" class="py-2 text-black transition duration-150 ease-in-out bg-gray-200 border-2 border-transparent rounded-md focus:outline-none focus:border-gray-400 focus:shadow-outline-green sm:text-sm sm:leading-5">Buscar</button>
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

                            {{-- inicio fila 1  dni representate, dni delegado --}}
                          <div class="flex flex-wrap -mx-3">

                                <div class="w-full px-3 md:w-1/2 md:mb-0">
                                  <label for="dnirepre" class="block text-xs font-bold tracking-wide text-gray-700 uppercase" >
                                    DNI REPRESENTANTE
                                  </label>
                                  <h3 type="text" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none h-11 focus:outline-none focus:bg-white" id="dnirepre" laceholder="DNI obligatorio" > {{$dnirepre}} </h3>
                                  @error('dnirepre')
                                  <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                      {{$message}}
                                  </span>
                                    @enderror
                                </div>

                                <div class="w-full px-3 mb-6 md:w-1/2">
                                <label for="dnideleg" class="block text-xs font-bold tracking-wide text-gray-700 uppercase " >
                                  DNI DELEGADO</label>
                               <h4 type="text" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none h-11 focus:outline-none focus:bg-white" id="dnideleg" laceholder="DNI obligatorio" > {{$dnideleg}} </h4>

                                @error('dnideleg')
                                <span class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                    {{$message}}
                                </span>
                                @enderror
                              </div>


                           {{-- fin de primera fila dni representate dni delegafo --}}

                          <div class="w-full px-3 mb-6 md:w-1/2">
                            <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="nombreasoc">
                              NOMBRE ASOCIACION
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="nombreasoc" type="text" wire:model="nombreasoc">
                         </div>


                            <div class="w-full px-3 md:w-1/2">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="ubicacion">
                                UBICACION
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="ubicacion" type="text" wire:model="ubicacion">
                            </div>

                        </div>

                          {{-- OTRO FORM  --}}
                         <div class="flex flex-wrap mb-6 -mx-3">
                          <div class="w-full px-3 md:w-1/2 md:mb-0">
                            <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="rubroasoc">
                              RUBRO ASOCIACION
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="rubroasoc" type="text" wire:model="rubroasoc">
                            </div>

                          <div class="w-full px-3 md:w-1/2 md:mb-0">
                             <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="tipoasoc">
                               TIPO ASOCIACION
                             </label>
                             <div class="relative">
                               <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="tipoasoc" wire:model="tipoasoc">
                                  <option value data-isdefault="true" style="display:none;">Seleccione</option>
                                  <option value="mayorista">Mayorista</option>
                                  <option value="minorista">Minorista</option>
                                  <option value="mixto">Mixto</option>
                               </select>
                             </div>
                           </div>
                        </div>

                              <div class="flex flex-wrap mb-4 -mx-3">
                                <div class="w-full px-3">
                                    <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="dferia">
                                      DIAS FERIA
                                    </label>
                                      <div class="flex ">
                                      <div class="mr-6"><input class="mx-2" value= "lunes" id="lunes" wire:model="lunes" type="checkbox" name="lunes">Lunes</div>
                                      <div class="mr-6"><input class="mx-2" value= "martes" id="martes" wire:model="martes" type="checkbox" name="martes">Martes</div>
                                      <div class="mr-6"><input class="mx-2" value= "miercoles" id="miercoles" wire:model="miercoles" type="checkbox" name="miercoles">Miercoles</div>
                                      <div class="mr-6"><input class="mx-2" value= "jueves" id="jueves" wire:model="jueves" type="checkbox" name="jueves">Jueves</div>
                                      <div class="mr-6"><input class="mx-2" value= "viernes" id="viernes" wire:model="viernes" type="checkbox" name="viernes">Viernes</div>
                                      <div class="mr-6"><input class="mx-2" value= "sabado" id="sabado" wire:model="sabado" type="checkbox" name="sabado">Sabado</div>
                                      <div class="mr-6"><input class="mx-2" value= "domingo" id="domingo" wire:model="domingo" type="checkbox" name="domingo">Domingo</div>
                                    </div>
                              </div>
                         </div>

                          <div class="flex flex-wrap -mx-3">
                            <div class="w-full px-3 mb-6 md:w-1/2">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="fechaconst">
                                FECHA CONSTITUCION
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="fechaconst" type="date" wire:model="fechaconst">
                          </div>

                          <div class="w-full px-3 md:w-1/2">
                            <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="docregist">
                              DOCUMENTO REGISTROS PUBLICOS
                            </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="docregist" type="file" wire:model="docregist">
        
                              @error('docregist') <span class="text-red-700 error">{{ $message }}</span> @enderror
                            
                            
                            </label>
                           </div>

                          <div class="w-full px-3 mb-6 md:w-1/2">
                            <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="docconsti">
                              DOCUMENTO CONSTITUCION
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="docconsti" type="file" wire:model="docconsti">
                            @error('docconsti') <span class="text-red-500 error">{{ $message }}</span> @enderror
                          </div>

                          <div class="w-full px-3 md:w-1/2">
                            <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="docpadron">
                              DOCUMENTO PADRON
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="docpadron" type="file" wire:model="docpadron">
                            @error('docpadron') <span class="text-red-500 error">{{ $message }}</span> @enderror
                          </div>
                        </div>


                          <div>
                              <div class="flex flex-wrap -mx-3">
                              <div class="w-full px-3">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="observacion">
                               OBSERVACIONES</label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="observacion" type="texto" wire:model="observacion">
                              </div>
                            </div>
                        </div>
                  </div>

                      <div class="px-4 py-3 bg-yellow-50 sm:px-6 sm:flex sm:flex-row-reverse">

                          <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                              <button wire:click="cerrarModal1()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-red-600 border border-gray-300 rounded-md shadow-sm hover:bg-red-800 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">Cancelar</button>
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