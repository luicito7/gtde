
        @foreach ($usuariosArray as $usuario)
      
        <tr>
          
            {{-- https://apis.net.pe/consulta-ruc-php.html   --}}
          {{-- <td class="px-4 py-2 border">{{$persona->id}}</td> --}}
          <td class="px-4 py-2 text-center border">{{$usuario['nombre']}}</td>
          <td class="px-4 py-2 text-center border">{{$persona['numeroDocumento']}}</td>
     
          
        </tr>
        
            
        @endforeach
