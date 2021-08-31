<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0" >
    
        <div class="fixed inset-y-0 w-full transition-opacity right-4">
            <div class="absolute inset-0 bg-gray-500 opacity-75" ></div>   {{--aqui para el fondo --}}
        </div>
  
               <span class="hidden sm:inline-block sm:align-middle sm:h-screen " ></span>
               
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:max-w-4xl sm:my-8 sm:align-middle" role="dialog" aria-modal="true" aria-labelledby="modal-headline" > <style> body {overflow-y:hidden;}</style>
    
                <form>
                  <span class="flex flex-row-reverse pt-2 pr-2 bg-yellow-50">
                    <button wire:click.prevent="cerrarModal()" class="px-2 py-1 text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-full focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                  </span>
                    <div class="px-4 pt-5 pb-4 bg-yellow-50 sm:p-6 sm:pb-4" >
                        
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full px-3 md:w-1/2 md:mb-0">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="dni">
                                DNI
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none focus:outline-none focus:bg-white" id="dni" type="number" placeholder="DNI obligatorio" data-maxlength="8" pattern="[0-9]{8}" wire:model="dni" required oninput="this.value=this.value.slice(0,this.dataset.maxlength)" >
                              @error('dni')
                              <span href="$form" >
                              <div class="px-4 py-3 text-teal-900 bg-red-100 border-t-4 border-red-500 rounded-b shadow-md " role="alert">
                                <div class="flex">
                                  <div class="py-1"><svg class="w-6 h-6 mr-4 text-red-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                  <div>
                                    <p class="font-bold">DNI</p>
                                    <p class="text-sm">{{ $message }}</p>
                                  </div>
                                </div>
                              </div>
                              </span>
                               @enderror 
                            </div>
                            
                            <div class="w-full px-3 mb-6 md:w-1/2">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="nombres">
                                NOMBRES
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="nombres" type="text" wire:model="nombres">
                           </div>
  
                            <div class="w-full px-3 mb-6 md:w-1/2">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="apepaterno">
                                  APELLIDO PATERNO
                                </label>
                                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="apepaterno" type="text" wire:model="apepaterno">
                            </div>
                              
                              <div class="w-full px-3 md:w-1/2">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="apematerno">
                                  APELLIDO MATERNO
                                </label>
                                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="apematerno" type="text" wire:model="apematerno">
                              </div>                      
  
                          </div>
                          
                              <div>
                                <div class="flex flex-wrap mb-6 -mx-3">
                                <div class="w-full px-3">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="ubicacion">
                                UBICACION</label>
                                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="ubicacion" type="texto" wire:model="ubicacion">
                                </div>
                              </div>
                            
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full px-3 md:w-1/2 md:mb-0">
                                  <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="asociacion">
                                    ASOCIACION
                                  </label>
                                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="asociacion" type="text" wire:model="asociacion">
                                  <br>
                                </div>
                                
                                <div class="w-full px-3 md:w-1/2">
                                  <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="rubro">
                                    RUBRO
                                  </label>
                                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="rubro" type="text" wire:model="model">
                                </div>
  
                             </div>
  
                           <div class="flex flex-wrap mb-6 -mx-3">
                             <div class="w-full px-3 md:w-1/2 md:mb-0">
                               <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="ruc">
                                 ZONA
                               </label>
                               <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="ruc" maxlength="11" type="text" wire:model="ruc">
                             </div>
  
                             
                             <div class="w-full px-3 md:w-1/2 md:mb-0">
                               <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="numpadron">
                                 NUMERO PADRON
                               </label>
                               <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="numpadron" type="number" wire:model="numpadron">
                             </div>
                            </div>
                          
                               {{-- final --}}                        
                               
                           </div>
                              <div>
                                <div class="flex flex-wrap -mx-3">
                                <div class="w-full px-3">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="direcreal">
                                 OBSERVACIONES</label>
                                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="observac" type="texto" wire:model="observac">
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