
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px6 lg:px-8">
        <div class="px-4 py-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">

        @if(session()->has('message'))
            <div class="px-4 py-4 my-3 text-teal-900 bg-teal-100 rounded-b shadow-md" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif


        <button wire:click="crear()" class="px-4 py-2 my-3 font-bold text-white bg-green-500 rounded-md hover:bg-green-600" >Nuevo</button>
        @if($modal)
            @include('livewire.crear-comerciante')   
        @endif    
        
        @if($modal1)
            @include('livewire.detalles-comerciante')   
        @endif 

        <table class="w-full text-xs rounded-lg table-fixed">
        <thead>
            <tr class="text-white bg-indigo-600">
                <th class="px-4 py-2 text-xs">ID</th>
                <th class="px-4 py-2 text-xs">DNI</th>
                <th class="px-4 py-2 text-xs">NOMBRES</th>
                <th class="px-4 py-2 text-xs">PUESTO</th>
                <th class="px-4 py-2 text-xs">OPCIONES</th>    
            </tr>
        </thead>
        <tbody>
            @foreach($comerciantes as $comerciante)
            <tr>
                <td class="px-4 py-2 text-center border">{{$comerciante->id}}</td>
                <td class="px-4 py-2 text-center border">{{$comerciante->dni}}</td>
                <td class="px-4 py-2 text-center border">{{$comerciante->nombres}}</td>
                <td class="px-4 py-2 text-center border">{{$comerciante->puesto}}</td>
                
                <td class="px-4 py-2 text-center border">
                    <button wire:click="editar({{$comerciante->id}})" title="Editar" class="px-0.3 py-0.3 font-bold bg-blue-500 rounded-md hover:bg-blue-600">
                        <i class="fas fa-pen fa-2x"></i>
                    </button>
                    
                    <button wire:click="detalles({{$comerciante->id}})" title="Detalles" class="px-0.3 py-0.3 font-bold bg-green-500 rounded-md hover:bg-green-600">
                        <i class="fas fa-eye fa-2x"></i>
                    </button>
                    
                    <button wire:click="borrar({{$comerciante->id}})" title="Borrar" class="px-0.3 py-0.3 font-bold bg-red-500 rounded-md hover:bg-red-600">
                        <i class="far fa-trash-alt fa-2x"></i>
                    </button>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
</div>

    
