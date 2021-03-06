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
                        
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full px-3 md:w-1/2 md:mb-0">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="dnirepre">
                                DNI REPRESENTANTE
                              </label>
                              <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none focus:outline-none focus:bg-white" id="dnirepre" type="number" placeholder="DNI obligatorio"  wire:model="dnirepre" " >
  
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
                                  DIRECCION DE LA ASOCIACION
                                </label>
                                <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="ubicacion" type="text" wire:model="ubicacion">
                              </div>    
                              
                              <div class="w-full px-3 mb-6 md:w-1/2">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="dnideleg">
                                  RUBRO ASOCIACION
                                </label>
                                <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="rubroasoc" type="text" wire:model="rubroasoc">
                            </div>
                              
                              <div class="w-full px-3 md:w-1/2">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="ubicacion">
                                  TIPO ASOCIACION
                                </label>
                                <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="tipoasoc" type="text" wire:model="tipoasoc">
                              </div>   
                          </div>
            

                              <div>
                                <div class="flex flex-wrap -mx-3">
                                <div class="w-full px-3 mb-6">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="observacion">
                                  DIAS DE FERIA</label>
                                  <output class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="dferia" type="text" wire:model="dferia">
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
                                <button wire:click="cerrarModal2()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-red-600 border border-gray-300 rounded-md shadow-sm hover:bg-red-800 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
  
                        </div>
  
                    </div>
                </form>    
            </div>
    </div>
  </div>