<x-app-layout>
    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        INFORMACION DE USUARIO
        <div class="p-8">
        <a href="{{route('users.index')}}" class="px-4 py-2 font-bold text-white bg-blue-500 border-b-4 border-blue-700 rounded hover:bg-blue-400 hover:border-blue-500">
            Volver
          </a>
        </div>
        <table class="border-2 border-black">
            <tbody>
                <tr><td class="pl-6 bg-blue-600 border-2 border-black w-60" >NRO</td><td class="px-6 bg-blue-400 border-2 border-black">{{$users->id}}</td></tr>
                <tr><td class="pl-6 bg-blue-600 border-2 border-black w-60" >DNI</td><td class="px-6 bg-blue-400 border-2 border-black">{{$users->dni}}</td></tr>
                <tr><td class="pl-6 bg-blue-600 border-2 border-black w-60" >NOMBRES COMPLETOS</td><td class="px-6 bg-blue-400 border-2 border-black">{{$users->name}}</td></tr>
                <tr><td class="pl-6 bg-blue-600 border-2 border-black w-60" >CARGO</td><td class="px-6 bg-blue-400 border-2 border-black">{{$users->cargo}}</td></tr>
                <tr><td class="pl-6 bg-blue-600 border-2 border-black w-60" >FECHA DE INGRESO</td><td class="pl-6 bg-blue-400 border-2 border-black">{{$users->created_at}}</td></tr>
                <tr><td class="pl-6 bg-blue-600 border-2 border-black w-60" >FECHA </td><td class="px-6 bg-blue-400 border-2 border-black">{{$users->updated_at}}</td></tr>
                </tr>
            </tbody>
           
                  
        </table>

                 
           

        </ul>
       
    </div>    
</x-app-layout>