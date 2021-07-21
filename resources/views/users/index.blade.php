<x-app-layout>
    <div class="py-1 mx-auto max-w-7xl sm:px-6 lg:px-5">
        <div>
            <ul class="flex pb-3">
                <li class="mr-3">
                  <a href="{{route('users.create')}}" class="inline-block px-3 py-1 text-white bg-blue-500 border border-blue-500 rounded" href="#">Agregar Usuario</a>
                </li>                
            </ul>

         
        </div>
        
        <table class="w-full table-auto min-w-max">
               
        <thead>
            <tr class="text-xs leading-normal text-gray-600 uppercase bg-blue-200 border border-gray-600">
                <th class="px-3 py-3 text-left">ID</th>
                <th class="px-4 py-3 text-center">DNI</th>
                <th class="px-6 py-3 text-center">NOMBRES</th>
                <th class="px-6 py-3 text-center">GERENCIA</th>
                <th class="px-6 py-3 text-center">CARGO</th>
                <th class="px-6 py-3 text-center">FECHA INGRESO</th>
                <th class="px-6 py-3 text-center">ACCIONES</th>
            </tr>
        </thead>
            @foreach ($users as $user)
                    
             <tbody class="text-xs font-light text-gray-700">
                <tr class="border border-gray-600 hover:bg-gray-100">
                    <td class="px-2 py-3 text-left whitespace-nowrap">
                        <div class="flex items-left">
                            <span class="font-medium">{{$user->id}}</span>
                        </div>
                    </td>
                    <td class="px-2 py-3 text-left">
                        <div class="flex items-center">
                            
                            <span><a href="{{route('users.show', $user->id)}}">{{$user->dni}}</a></span>
                        </div>
                    </td>
                    <td class="px-5 py-3 text-left">
                        <div class="flex justify-left items-left">
                            <span> {{$user->name}} </span>
                        </div>
                    </td>
                    <td class="px-5 py-3 text-center">
                        <div class="flex justify-left items-left">
                            <span> {{$user->oficina}} </span>
                        </div>
                    </td>
                    <td class="px-2 py-3 text-left">
                        <div class="flex justify-left items-left">
                            <span> {{$user->cargo}} </span>
                        </div>
                    </td>
                    <td class="px-2 py-3 text-center">
                        <div class="flex items-center justify-center">
                            <span> {{$user->fecha_expiracion}} </span>
                        </div>
                    </td>
                    <td class="px-2 py-3 text-center">
                        <a href="{{route('users.show', $user->id)}}" class="h-12 px-2 m-1 text-red-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-700"><i class="fas fa-eye fa-lg"></i> Ver</a>
                        <a class="h-12 px-2 m-1 text-red-100 transition-colors duration-150 bg-yellow-600 rounded-lg focus:shadow-outline hover:bg-yellow-500" href="#">
                            <i class="fas fa-trash"></i> Edita</a>
                        <a class="h-12 px-2 m-1 text-red-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800" href="#">
                            <i class="fas fa-trash"></i> Borrar</a>
                    </td>
                    
                </tr>
                
                
            </tbody>
            @endforeach
        </table>
        
        {{$users->links()}}
    </div>    
</x-app-layout>