<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0" >
    
        <div class="fixed inset-y-0 w-full transition-opacity right-4">
            <div class="absolute inset-0 bg-gray-500 opacity-75" ></div>   {{--aqui para el fondo --}}
        </div>
  
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen " ></span>
  
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:max-w-4xl sm:my-8 sm:align-middle" role="dialog" aria-modal="true" aria-labelledby="modal-headline" > <style> body {overflow-y:hidden;}</style>
    
                <form>
                    <div class="px-4 pt-5 pb-4 bg-yellow-50 sm:p-6 sm:pb-4" >
                        
                        <div class="flex flex-wrap mb-6 -mx-3">
                            <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="dni">
                                DNI
                              </label>
                              <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none focus:outline-none focus:bg-white" id="dni" type="text" placeholder="DNI obligatorio" maxlength="8" pattern="[0-9]{8}" wire:model="dni" required>
                              @error('dni') <span class="error" href="#dni">{{ $message }}</span> @enderror
                              
                              <BR>
                            </div>
                            
                            <div class="w-full px-3 md:w-1/2">
                              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="nombres">
                                NOMBRES
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="nombres" type="text" wire:model="nombres">
                            </div>
  
                            <div class="w-full px-3 md:w-1/2">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="apepaterno">
                                  APELLIDO PATERNO
                                </label>
                                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="apepaterno" type="text" wire:model="apepaterno">
                            </div>
                              
                              <div class="w-full px-3 md:w-1/2">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="apematerno">
                                  APELLIDO MATERNO
                                </label>
                                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="apematerno" type="text" wire:model="apematerno">
                              </div>                      
  
                          </div>
                          
  
                         {{-- INICIO  --}}
                          <div class="flex flex-wrap mb-2 -mx-3">
                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="departamento">
                                DEPARTAMENTO
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="departamento" type="text" wire:model="departamento">
                            </div>
  
                            
                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="provincia">
                                PROVINCIA
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="provincia" type="text" wire:model="provincia">
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                </div>
                            </div>
  
                            
                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="distrito">
                                DISTRITO
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="distrito" type="text" wire:model="distrito">
                            </div>
                           </div>
                          <br>
                              {{-- final --}}
                          
                              <div>
                                <div class="flex flex-wrap mb-6 -mx-3">
                                <div class="w-full px-3">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="direcreal">
                                DIRECCION</label>
                                <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="direcreal" type="texto" placeholder="(Jr.calle,Av.) Av. Los lirios N° 000" wire:model="direcreal">
                                </div>
                            </div>
                            
                            <div class="flex flex-wrap mb-6 -mx-3">
                                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="celprin">
                                    CELULAR
                                  </label>
                                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="celprin" type="text" maxlength="9" wire:model="celprin">
                                  <br>
                                </div>
                                
                                <div class="w-full px-3 md:w-1/2">
                                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="email">
                                    CORREO
                                  </label>
                                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" wire:model="email">
                                </div>
  
                                </div>
  
                                <div class="flex flex-wrap mb-6 -mx-3">
                                  <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="sexo">
                                      SEXO
                                    </label>
                                    <div class="relative">
                                      <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="sexo" wire:model="sexo">
                                        <option value data-isdefault="true" style="display:none;">Seleccione</option>
                                        <option value="1">Femenino</option>
                                        <option value="2">Masculino</option>
                                      </select>
                                  </div>
                                </div>
                                  
                                  <div class="w-full px-3 md:w-1/2">
                                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="fechanac">
                                      fECHA DE NACIMIENTO
                                    </label>
                                    <input type="date" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="fechanac" type="fechanac" wire:model="fechanac">
                                  </div>  
                                </div>
                                
  
                          {{-- formulario2  --}}
                           <div class="flex flex-wrap mb-2 -mx-3">
                             <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                               <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="ruc">
                                 RUC
                               </label>
                               <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="ruc" maxlength="11" type="text" wire:model="ruc">
                             </div>
  
                             
                             <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="estacivil">
                                  ESTADO CIVIL
                                </label>
                                <div class="relative">
                                  <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="estacivil" wire:model="estacivil" required atribute>
                                    <option value data-isdefault="true" style="display:none;">Seleccione</option>
                                    <option value="1">soltero</option>
                                    <option value="2">conviviente</option>
                                    <option value="3">casado</option>
                                    <option value="4">divorciado</option>
                                    <option value="5">viudo</option>
                                  </select>
                                </div>
                              </div>
  
                             
                             <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                               <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="profesion">
                                 PROFESION
                               </label>
                               <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="profesion" type="text" wire:model="profesion">
                             </div>
                            </div>
                           <br>
                               {{-- final --}}
  
                            {{-- OTRO FORM  --}}
                           <div class="flex flex-wrap mb-2 -mx-3">
                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grainstruc">
                                  FORMACION
                                </label>
                                <div class="relative">
                                  <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grainstruc" wire:model="grainstruc">
                                    <option value data-isdefault="true" style="display:none;">Seleccione</option>
                                    <option value="1">primaria</option>
                                    <option value="2">secundaria</option> 
                                    <option value="3">bachiller</option> 
                                    <option value="4">titulado</option> 
                                    <option value="5">universidad incompleta</option> 
                                    <option value="6">universidad completa</option> 
                                    <option value="7">instituto</option> 
                                    <option value="8">egresado</option> 
                                    <option value="9">estudiante</option> 
                                    <option value="10">tecnico</option>                                  
                                  </select>
                                </div>
                              </div>
                            
                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                               <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="discapac">
                                 DISCAPACIDAD
                               </label>
                               <div class="relative">
                                 <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="discapac" wire:model="discapac">
                                    <option value data-isdefault="true" style="display:none;">Seleccione</option> 
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                 </select>
                               </div>
                             </div>
  
                            
                             <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="estadoreg">
                                  ESTADO
                                </label>
                                <div class="relative">
                                  <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="estadoreg" wire:model="estadoreg">
                                    <option value data-isdefault="true" style="display:none;">Seleccione</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                  </select>
                                </div>
                              </div>
                           </div>
                          <br>
                            {{-- final --}}
  
                              <div>
                                <div class="flex flex-wrap mb-6 -mx-3">
                                <div class="w-full px-3">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="direcreal">
                                 OBSERVACIONES</label>
                                <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="observac" type="texto" wire:model="observac">
                                </div>
                              </div>  
                        </div>   
                    </div>
                  
                        <div class="px-4 py-3 bg-yellow-50 sm:px-6 sm:flex sm:flex-row-reverse">
                            
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal2()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-gray-200 border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                            
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="mod()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-purple-600 border border-transparent rounded-md shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green sm:text-sm sm:leading-5">Guardar</button>
                            </span>
  
                        </div>
  
                    </div>
                </form>    
            </div>
    </div>
  </div>