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
                            <style>
                              input[type=number]::-webkit-inner-spin-button, 
                                input[type=number]::-webkit-outer-spin-button { 
                                  -webkit-appearance: none; 
                                  margin: 0; 
                                }
                                input[type=number] { -moz-appearance:textfield; }
                            </style>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-blue-500 rounded appearance-none focus:outline-none focus:bg-white" id="dni" type="number" placeholder="DNI obligatorio" data-maxlength="8" pattern="[0-9]{8}" wire:model="dni" required oninput="this.value=this.value.slice(0,this.dataset.maxlength)" >
                            @error('dni')
                              <p class="text-sm italic text-red-500">{{$message}}</p>
                             @enderror 
                          </div>
                          
                          <div class="w-full px-3 mb-6 md:w-1/2">
                            <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="nombres">
                              NOMBRES
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"  id="nombres" type="text"  onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" wire:model="nombres">
                            @error('nombres')
                              <p class="text-xs italic text-red-500">{{$message}}</p>
                            @enderror 
                         </div>

                          <div class="w-full px-3 mb-6 md:w-1/2">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="apepaterno">
                                APELLIDO PATERNO
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="apepaterno" type="text" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"  wire:model="apepaterno">
                              @error('apepaterno')
                                <p class="text-xs italic text-red-500">{{$message}}</p>
                              @enderror 
                          </div>
                            
                            <div class="w-full px-3 md:w-1/2">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="apematerno">
                                APELLIDO MATERNO
                              </label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="apematerno" type="text" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" wire:model="apematerno">
                              @error('apematerno')
                                <p class="text-xs italic text-red-500">{{$message}}</p>
                              @enderror
                            </div>                      

                        </div>
                        

                       {{-- INICIO  --}}
                        <div class="flex flex-wrap mb-6 -mx-3">
                          <div class="w-full px-3 md:w-1/3 md:mb-0">
                            <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="departamento">
                              DEPARTAMENTO
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="departamento" type="text" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" wire:model="departamento">
                          </div>

                          
                          <div class="w-full px-3 md:w-1/3 md:mb-0">
                            <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="provincia">
                              PROVINCIA
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="provincia" type="text" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" wire:model="provincia">
                              <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                              </div>
                          </div>

                          
                          <div class="w-full px-3 md:w-1/3 md:mb-0">
                            <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="distrito">
                              DISTRITO
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="distrito" type="text" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" wire:model="distrito">
                          </div>
                         </div>
                            {{-- final --}}
                        
                            <div>
                              <div class="flex flex-wrap mb-6 -mx-3">
                              <div class="w-full px-3">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="direcreal">
                              DIRECCION</label>
                              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="direcreal" type="texto" placeholder="(Jr.calle,Av.) Av. Los lirios N° 000" wire:model="direcreal">
                              </div>
                            </div>
                          
                          <div class="flex flex-wrap -mx-3">
                              <div class="w-full px-3 md:w-1/2 md:mb-0">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="celprin">
                                  CELULAR
                                </label>
                                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="celprin" type="text" maxlength="9" wire:model="celprin">
                                <br>
                              </div>
                              
                              <div class="w-full px-3 md:w-1/2">
                                <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="email">
                                  CORREO
                                </label>
                                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" wire:model="email">
                              </div>

                           </div>

                              <div class="flex flex-wrap mb-6 -mx-3">
                                <div class="w-full px-3 md:w-1/2 md:mb-0">
                                  <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="sexo">
                                    SEXO
                                  </label>
                                  <div class="relative">
                                    <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="sexo" wire:model="sexo">
                                      <option value data-isdefault="true" style="display:none;">Seleccione</option>
                                      <option value="Femenino">Femenino</option>
                                      <option value="Masculino">Masculino</option>
                                    </select>
                                </div>
                              </div>
                                
                                <div class="w-full px-3 md:w-1/2">
                                  <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="fechanac">
                                    fECHA DE NACIMIENTO
                                  </label>
                                  <input type="date" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="fechanac" type="fechanac" wire:model="fechanac">
                                </div>  
                              </div>

                         <div class="flex flex-wrap mb-6 -mx-3">
                           <div class="w-full px-3 md:w-1/3 md:mb-0">
                             <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="ruc">
                               RUC
                             </label>
                             <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="ruc" maxlength="11" type="text" wire:model="ruc">
                           </div>

                           <div class="w-full px-3 md:w-1/3 md:mb-0">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="estacivil">
                                ESTADO CIVIL
                              </label>
                              <div class="relative">
                                <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="estacivil" wire:model="estacivil" required atribute>
                                  <option value data-isdefault="true" style="display:none;">Seleccione</option>
                                  <option value="soltero">Soltero</option>
                                  <option value="conviviente">Conviviente</option>
                                  <option value="casado">Casado</option>
                                  <option value="divorciado">Divorciado</option>
                                  <option value="viudo">Viudo</option>
                                </select>
                              </div>
                            </div>

                           
                           <div class="w-full px-3 md:w-1/3 md:mb-0">
                             <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="discapac">
                               DISCAPACIDAD
                             </label>
                             <div class="relative">
                              <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="discapac" wire:model="discapac">
                                 <option value data-isdefault="true" style="display:none;">Seleccione</option> 
                                 <option value="no">No</option>
                                 <option value="si">Si</option>
                              </select>
                            </div>
                             
                           </div>
                          </div>
                        
                             {{-- final --}}

                          {{-- OTRO FORM  --}}
                         <div class="flex flex-wrap mb-6 -mx-3">
                          <div class="w-full px-3 md:w-1/2 md:mb-0">
                              <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="grainstruc">
                                FORMACION
                              </label>
                              <div class="relative">
                                <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grainstruc" wire:model="grainstruc">
                                  <option value data-isdefault="true" style="display:none;">Seleccione</option>
                                  <option value="primaria">Primaria</option>
                                  <option value="secundaria">Secundaria</option> 
                                  <option value="bachiller">Bachiller</option> 
                                  <option value="titulado">Titulado</option> 
                                  <option value="universidad incompleta">Universidad Incompleta</option> 
                                  <option value="universidad completa">Universidad Completa</option> 
                                  <option value="instituto">Instituto</option> 
                                  <option value="egresado">Egresado</option> 
                                  <option value="estudiante">Estudiante</option> 
                                  <option value="tecnico">Tecnico</option>                                  
                                </select>
                              </div>
                            </div>
                          
                          <div class="w-full px-3 md:w-1/2 md:mb-0">
                             <label class="block text-xs font-bold tracking-wide text-gray-700 uppercase" for="profesion">
                               PROFESION
                             </label>
                             <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="profesion" type="text" wire:model="profesion">
                           </div>

                          
                           
                            
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