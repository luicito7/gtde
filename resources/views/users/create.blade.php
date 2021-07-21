<x-app-layout>
    <a href="{{route('users.index')}}" class="p-4 py-2 mb-1 mr-1 text-xs font-bold text-gray-600 uppercase transition-all duration-150 ease-linear bg-transparent bg-blue-400 border border-gray-700 border-solid rounded outline-none hover:bg-blue-200 hover:text-white active:bg-purple-600 focus:outline-none">
        <i class="fas fa-arrow-circle-left"></i> Atras</a> 
   
        <div class="py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
            
        <form action="{{route('users.store')}}" method="post"> 

          <div class="px-6 pb-10 font-serif text-left bg-indigo-400 rounded-md shadow-md md:grid md:grid-cols-4 md:gap-x-8" style="max-width: 1000px;">
                   
            @csrf
           <label class="block col-start-2 col-end-4 pb-4 font-mono text-xl">Registro de Nuevo Usuario Municipal</label>
            
           <label class="block col-start-1">
                <span class="text-gray-700">Dni</span>
                <div class="relative flex flex-wrap items-stretch w-full mb-3">
                    <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-1 pl-2 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                    <i class="far fa-id-card"></i>
                    </span>
                    <input type="number" name="dni" placeholder="Ingrese DNI"
                    class="relative w-full px-2 py-1 pl-10 text-sm text-gray-600 placeholder-gray-400 bg-white border border-gray-400 rounded outline-none focus:outline-none focus:ring-2" />
              </div>                
            </label>
              
            <label class="block col-span-2 col-start-3">
              <span class="text-gray-700">Nombres Completos</span>
              <div class="relative flex flex-wrap items-stretch w-full mb-3">
                <span
                class="absolute z-10 items-center justify-center w-8 h-full py-1 pl-2 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                <i class="fas fa-user-edit"></i>
                </span>
                <input type="text" name="name" placeholder="Nombres completos"
                class="relative w-full px-2 py-1 pl-10 text-sm text-gray-600 placeholder-gray-400 bg-white border border-gray-400 rounded outline-none focus:outline-none focus:ring-1" />
               </div>  
            </label>
            
            <label class="block col-start-1 col-end-3">
                <span class="text-gray-700">Email</span>
                <div class="relative flex flex-wrap items-stretch w-full mb-3">
                    <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-1 pl-2 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                    <i class="far fa-envelope"></i>
                    </span>
                    <input type="text" name="email" placeholder="Correo Elelctronico"
                    class="relative w-full px-2 py-1 pl-10 text-sm text-gray-600 placeholder-gray-400 bg-white border border-gray-400 rounded outline-none focus:outline-none focus:ring-1" />
                   </div> 
            </label>
            <label class="block col-start-3">
            <span class="text-gray-700">Celular</span>
            <div class="relative flex flex-wrap items-stretch w-full mb-3">
                <span
                class="absolute z-10 items-center justify-center w-8 h-full py-1 pl-2 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                <i class="fas fa-mobile-alt"></i>
                </span>
                <input type="text" placeholder="Celular"
                class="relative w-full px-2 py-1 pl-10 text-sm text-gray-600 placeholder-gray-400 bg-white border border-gray-400 rounded outline-none focus:outline-none focus:ring-1" />
               </div> 
            </label>
            <label class="block col-start-1 col-end-3">
                <span class="text-gray-700">Password</span>
                <div class="relative flex flex-wrap items-stretch w-full mb-3">
                    <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-1 pl-2 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                    <i class="fas fa-lock-open"></i>
                    </span>
                    <input type="password" name="password" placeholder="Contraseña"
                    class="relative w-full px-2 py-1 pl-10 text-sm text-gray-600 placeholder-gray-400 bg-white border border-gray-400 rounded outline-none focus:outline-none focus:ring-1" />
                   </div> 
            </label>
            <label class="block col-span-2 ">
                <span class="text-gray-700 ">Repetir Password</span>
                <div class="relative flex flex-wrap items-stretch w-full mb-3">
                    <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-1 pl-2 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                    <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="repassword" placeholder="Repetir Contraseña"
                    class="relative w-full px-2 py-1 pl-10 text-sm text-gray-600 placeholder-gray-400 bg-white border border-gray-400 rounded outline-none focus:outline-none focus:ring-1" />
                   </div> 
            </label>                   
            
            <label class="block col-span-2 ">
                <span class="text-gray-700 ">Gerencia/SubGerencia/Oficina</span>
                <div class="relative flex flex-wrap items-stretch w-full mb-3">
                    <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-1 pl-2 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                    <i class="fas fa-chalkboard-teacher"></i>
                    </span>
                    <input type="text" name="oficina" placeholder="Oficina"
                    class="relative w-full px-2 py-1 pl-10 text-sm text-gray-600 placeholder-gray-400 bg-white border border-gray-400 rounded outline-none focus:outline-none focus:ring-1" />
                   </div> 
            </label>
            <label class="block col-span-2 ">
                <span class="text-gray-700 ">Cargo que desempeña</span>
                <div class="relative flex flex-wrap items-stretch w-full mb-3">
                    <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-1 pl-2 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                    <i class="fas fa-id-card-alt"></i>
                    </span>
                    <input type="text" name="cargo" placeholder="Cargo"
                    class="relative w-full px-2 py-1 pl-10 text-sm text-gray-600 placeholder-gray-400 bg-white border border-gray-400 rounded outline-none focus:outline-none focus:ring-1" />
                   </div> 
            </label>
            <label class="block col-span-2 ">
                <span class="text-gray-700 ">Fecha de Ingreso</span>
                <input type="date" name="fecha_ingreso" class="block w-full mt-1 form-input" placeholder="Cargo">
            </label>
            <label class="block col-span-2 ">
                <span class="text-gray-700 ">Fecha de Salida</span>
                <input type="date" name="fecha_expiracion" class="block w-full mt-1 form-input" placeholder="Cargo">
            </label>
            <label class="block mt-4">
                <span class="text-gray-700">Nivel de Acceso</span>
                <select class="block w-full mt-1 form-select" name="nivel">
                  <option value="1">Administrador</option>
                  <option value="2">Supervisor</option>
                  <option value="3">Operador</option>
                  <option value="4">Publico</option>
                </select>
              </label>
            
            <label class="block col-span-2">
                <button type="submit" class="px-6 py-2 my-12 font-medium text-white transition duration-200 bg-green-500 rounded hover:bg-green-600 each-in-out"><i class="far fa-save"></i> Guardar</button>
                <button type="clear" class="px-2 py-2 font-medium text-white transition duration-200 bg-gray-500 rounded mx-7 hover:bg-gray-600 each-in-out">Limpiar</button>
            </label>
           
        </div>
    </form> 
    </div>   
     
</x-app-layout>
