
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
            @include('livewire.crear-asociado')   
        @endif
        
        {{-- @if($modal2)
        @include('livewire.editar-asociados')   
        @endif  --}}

        <table class="w-full table-fixed">
        <thead>
            <tr class="text-white bg-indigo-600">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">DNI</th>
                <th class="px-4 py-2">NOMBRES</th>
                <th class="px-4 py-2">UBICACION</th>
                <th class="px-4 py-2">OPCIONES</th>    
            </tr>
        </thead>
        <tbody>
            @foreach($asociados as $asociado)
            <tr>
                <td class="px-4 py-2 text-center border">{{$asociado->id}}</td>
                <td class="px-4 py-2 text-center border">{{$asociado->dni}}</td>
                <td class="px-4 py-2 text-center border">{{$asociado->nombrecomplet}}</td>
                <td class="px-4 py-2 text-center border">{{$asociado->ubicacion}}</td>
                <td class="px-4 py-2 text-center border">
                    <button wire:click="editar({{$asociado->id}})" class="px-4 py-2 font-bold text-white bg-blue-500 hover:bg-blue-600">Editar</button>
                    <button wire:click="borrar({{$asociado->id}})" class="px-4 py-2 font-bold text-white bg-red-500 hover:bg-red-700">Borrar</button>
                    <button wire:click="detalles({{$asociado->id}})" class="px-4 py-2 font-bold text-white bg-red-500 hover:bg-red-700">Detalles</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
</div>

    