<div class="py-0.5 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="flex items-center justify-between ">  {{-- espaciado modal --}}
        <button wire:click="crear()" class="px-4 py-2 my-3 font-bold text-white bg-green-500 rounded-md w-60 hover:bg-green-600" >Agregar Asociado</button>
       
         <!-- component -->

     <div class="relative text-gray-600 focus-within:text-gray-400">
        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
          <button type="submit" class="p-1 mt-4 focus:outline-none focus:shadow-outline">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          </button>
        </span>
        <input wire:model="search" class="block h-10 px-4 py-2 pl-10 mt-3 text-sm rounded-md hadow-sm form-input w-60" type="text" placeholder="Buscar...">
      </div>
      {{-- <input type="search" name="q" class="py-2 pl-10 text-sm text-white bg-gray-900 rounded-md focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Search..." autocomplete="off"> --}}
        
        
        {{-- <input wire:model="search" class="block h-10 px-4 mt-3 rounded-md hadow-sm form-input w-60" type="text" placeholder="Buscar...">  --}}
            
      </div>
               <div class="flex items-center justify-between py-2 shadow-sm form-input"> 
                    <select wire:model="perPage" class="text-xs bg-gray-200 rounded-md outline-none w-60">
                       <option value="10">10 por Página</option>
                       <option value="15">15 por Página</option>
                       <option value="25">25 por Página</option>
                       <option value="50">50 por Página</option>
                       <option value="100">100 por Página</option>
                       </select>
                      
                       @if($search !=='')
                    <div >
                        <button wire:click="clear" class="">
                        {{-- <i class='fas fa-trash-alt fa-spin fa-2x'></i> --}}
 
                        <span class='fa-stack fa-lg'>
                            <i class='fas fa-circle fa-stack-2x'></i>
                            <i class='fas fa-trash-alt fa-stack-1x fa-inverse fa-spin fa-1x '></i>
                        </span>
                          </button>
                       {{-- <button wire:click="clear" class="block mt-1 ml-6 rounded-md shadow-sm form-input">X</button> --}}
                       </div>
                       @endif  
                    </div> 
                    @if($modal)
                        @include('livewire.crear-asociado')   
                    @endif
                    
                    @if($modal1)
                    @include('livewire.detalles-asociado')   
                    @endif 

        @if ($asociados ->count())  
        <table class="w-full text-xs rounded-lg table-fixed">
        <thead>
            <tr class="text-white bg-indigo-600">
                <th class="px-4 py-2 text-xs">DNI</th>
                <th class="px-4 py-2 text-xs">NOMBRE COMPLETO</th>
                <th class="px-4 py-2 text-xs">UBICACION</th>
                <th class="px-4 py-2 text-xs">UASOCIACIÓN</th>
                <th class="px-4 py-2 text-xs">RUBRO</th>
                <th class="px-4 py-2 text-xs">OPCIONES</th>    
            </tr>
        </thead>
        <tbody>
            @foreach($asociados as $asociado)
            <tr>
                
                <td class="px-4 py-2 text-center border">{{$asociado->dniaso}}</td>
                <td class="px-4 py-2 text-center border">{{$asociado->nombrecomplet}}</td>
                <td class="px-4 py-2 text-center border">{{$asociado->ubicacion}}</td>
                <td class="px-4 py-2 text-center border">{{$asociado->asociacion}}</td>
                <td class="px-4 py-2 text-center border">{{$asociado->rubro}}</td>
                
                <td class="px-4 py-2 text-center border">
                    <button wire:click="editar({{$asociado->id}})" title="Editar" class="px-0.3 py-0.3 font-bold bg-blue-500 rounded-md hover:bg-blue-600">
                        <i class="fas fa-pen fa-2x"></i>
                    </button>
                    
                    <button wire:click="detalles({{$asociado->id}})" title="Detalles" class="px-0.3 py-0.3 font-bold bg-green-500 rounded-md hover:bg-green-600">
                        <i class="fas fa-eye fa-2x"></i>
                    </button>

                    <button wire:click="borrar({{$asociado->id}})" title="Borrar" class="px-0.3 py-0.3 font-bold bg-red-500 rounded-md hover:bg-red-600">
                        <i class="far fa-trash-alt fa-2x"></i>
                    </button>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="px-4 py-3 bg-white border-t border-gray-200 rounded-lg sm:px-6">
        {{ $asociados->links() }}
      </div>
      @else
      <div class="px-4 py-3 text-gray-500 bg-white border-t border-gray-200 sm:px-6">
        NO hay resultados para la busqueda "{{$search}}" en la página {{$page}} al mostrar {{$perPage}} por Página
      </div>
      @endif

</div>

    
    