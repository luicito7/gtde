<div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <button wire:click="crear()" class="px-4 py-2 my-3 text-xs bg-green-500 xt-white fYont-bold M hover:bg-green-600">AGREGAR DATOS</button>
                    @if($modal)
                        @include('livewire.crear')                
                    @endif

                    @if($modal1)
                    @include('livewire.detalles')                
                    @endif
                
    <table class="w-full text-xs table-fixed">
        <thead>
        <tr class="text-white bg-indigo-600 ">
        <th class="px-4 py-2 text-xs">ID</th>
        <th class="px-4 py-2 text-xs">DNI</th>
        <th class="px-4 py-2 text-xs">NOMBRE</th>
        <th class="px-4 py-2 text-xs">APELLIDO PATERNO</th>
        <th class="px-4 py-2 text-xs">APELLIDO MATERNO</th>                    
        <th class="px-4 py-2 text-xs">CELULAR</th>
        <th class="px-4 py-2 text-xs">OPCIONES</th>                                        
         </tr>
        </thead>                
        <tbody>
            @foreach($personas as $persona)
                <tr>
                    <td class="px-4 py-2 border">{{$persona->id}}</td>
                    <td class="px-4 py-2 border">{{$persona->dni}}</td>
                    <td class="px-4 py-2 border">{{$persona->nombres}}</td>
                    <td class="px-4 py-2 border">{{$persona->apepaterno}}</td>
                    <td class="px-4 py-2 border">{{$persona->apematerno}}</td>                            
                    <td class="px-4 py-2 border">{{$persona->celprin}}</td>
                    
                    
                    <td class="px-4 py-2 text-xs text-center border">
                        <button wire:click="editar({{$persona->id}})" class="px-0.3 py-0.3 font-bold bg-blue-500 hover:bg-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </button>
                        <button wire:click="borrar({{$persona->id}})"class="px-0.3 py-0.3 font-bold bg-red-500 hover:bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg> 
                        </button>
                        
                        <button wire:click="detalles({{$persona->id}})"class="px-0.3 py-0.3 font-bold bg-green-500 hover:bg-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                        </button>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
          
        
</div>
