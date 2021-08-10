<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0" >
    
        <div class="fixed inset-y-0 w-full transition-opacity right-4">
            <div class="absolute inset-0 bg-gray-500 opacity-75" ></div>   {{--aqui para el fondo --}}
        </div>
  
               <span class="hidden sm:inline-block sm:align-middle sm:h-screen " ></span>
               
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:max-w-4xl sm:my-8 sm:align-middle" role="dialog" aria-modal="true" aria-labelledby="modal-headline" > <style> body {overflow-y:hidden;}</style>
    
                <form>
                    <div class="px-4 pt-5 pb-4 bg-yellow-50 sm:p-6 sm:pb-4" >
                        
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full px-3 md:w-1/2 md:mb-0">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="dnirepre">
                                DNI REPRESENTANTE
                              </label>
                              <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none focus:outline-none focus:bg-white" id="dnirepre" type="number" placeholder="DNI obligatorio" data-maxlength="8" pattern="[0-9]{8}" wire:model="dnirepre" required oninput="this.value=this.value.slice(0,this.dataset.maxlength)" >
                              @error('dnirepre')
                              <span href="$form" >
                              <div class="px-4 py-3 text-teal-900 bg-red-100 border-t-4 border-red-500 rounded-b shadow-md " role="alert">
                                <div class="flex">
                                  <div class="py-1"><svg class="w-6 h-6 mr-4 text-red-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                </div>
                              </div>
                              </span>
                               @enderror 
                            </div>
                            
                            <div class="w-full px-3 mb-6 md:w-1/2">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="nombreasoc">
                                NOMBRE ASOCIACION
                              </label>
                              <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="nombreasoc" type="text" wire:model="nombreasoc">
                           </div>
  
                            <div class="w-full px-3 mb-6 md:w-1/2">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="dnideleg">
                                  DNI DELEGADO
                                </label>
                                <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="dnideleg" type="text" wire:model="dnideleg">
                            </div>
                              
                              <div class="w-full px-3 md:w-1/2">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="ubicacion">
                                  UBICACION
                                </label>
                                <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="ubicacion" type="text" wire:model="ubicacion">
                              </div>                      
  
                          </div>
  
                            {{-- OTRO FORM  --}}
                           <div class="flex flex-wrap mb-6 -mx-3">
                            <div class="w-full px-3 md:w-1/3 md:mb-0">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="rubroasoc">
                                RUBRO ASOCIACION
                              </label>
                              <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="rubroasoc" type="text" wire:model="rubroasoc">
                              </div>
                            
                            <div class="w-full px-3 md:w-1/3 md:mb-0">
                               <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="tipoasoc">
                                 TIPO ASOCIACION
                               </label>
                               <div class="relative">
                                 <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="tipoasoc" wire:model="tipoasoc">
                                    <option value data-isdefault="true" style="display:none;">Seleccione</option> 
                                    <option value="1">Mayorista</option>
                                    <option value="2">Minorista</option>
                                    <option value="3">Mixto</option>
                                 </select>
                               </div>
                             </div>
  
                            
                             <div class="w-full px-3 md:w-1/3 md:mb-0">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="dferia">
                                  DIAS FERIA
                                </label>
                                <div class="relative">
                                  <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="dferia" wire:model="dferia">
                                    <option value data-isdefault="true" style="display:none;">Seleccione</option>
                                    <option value="1">Lunes</option>
                                    <option value="2">Martes</option>
                                    <option value="3">Miercoles</option>
                                    <option value="4">Jueves</option>
                                    <option value="5">Viernes</option>
                                    <option value="6">Sabado</option>
                                    <option value="7">Domingo</option>
                                  </select>
                                </div>
                              </div>
                           </div>
  
                           <div class="flex flex-wrap -mx-3"> 
                            <div class="w-full px-3 mb-6 md:w-1/2">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="fechaconst">
                                  FECHA CONSTITUCION
                                </label>
                                <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="fechaconst" type="date" wire:model="fechaconst">
                            </div>
                          
                            <div class="w-full px-3 md:w-1/2">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="docregist">
                                DOCUMENTO REGISTROS PUBLICOS
                              </label>
                              <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="docregist" type="text" wire:model="docregist">
                            </div>                      
  
                            <div class="w-full px-3 mb-6 md:w-1/2">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="docconsti">
                                DOCUMENTO CONSTITUCION
                              </label>
                              <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="docconsti" type="text" wire:model="docconsti">
                            </div>
                        
                            <div class="w-full px-3 md:w-1/2">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="docpadron">
                                DOCUMENTO PADRON
                              </label>
                              <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="docpadron" type="text" wire:model="docpadron">
                            </div> 
                          </div> 
                            <div>
                                <div class="flex flex-wrap -mx-3">
                                <div class="w-full px-3">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="observacion">
                                 OBSERVACIONES</label>
                                <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="observacion" type="texto" wire:model="observacion">
                                </div>
                              </div>  
                          </div>   
                    </div>
                  
                        <div class="px-4 py-3 bg-yellow-50 sm:px-6 sm:flex sm:flex-row-reverse">
                            
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal4()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-gray-200 border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
  
                        </div>
  
                    </div>
                </form>    
            </div>
    </div>
  </div>