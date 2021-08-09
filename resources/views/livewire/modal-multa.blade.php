
<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-600">
    {{-- <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0" > --}}
    <div class="flex justify-center min-h-screen px-4 pb-20 text-center sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>   {{--aqui para el fondo --}}
        </div>

        <span class="hidden sm:align-middle sm:h-screen " ></span>
        
            <div class="inline-block overflow-auto text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-10 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline" >    
                <span class="flex flex-row-reverse pt-2 pr-2">
                    <button wire:click.prevent="cerrarModalMulta()" class="px-2 py-1 text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-full focus:outline-none focus:border-green-400 focus:shadow-outline-green sm:text-sm sm:leading-4">X</button>
                </span>
                <form action="">
                    <div class="items-center px-4 pt-0 pb-4 bg-white-50 sm:p-6 sm:pb-4" >
                        <div class="flex items-center justify-between pb-5">
                            <h2>Buscar Codigo</h2>
                            <div class="relative self-center text-gray-600 sm:mb-0 focus-within:text-gray-400">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                    <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    </button>
                                  </span>
                                <input wire:model="searchMulta" type="search" name="q" class="py-2 pl-10 text-sm border-2 rounded-md focus:outline-none focus:bg-green focus:text-gray-900" placeholder="Buscar..." autocomplete="on">
                                
                                {{-- <input type="text" class="rounded form-control" placeholder="Buscar..." wire:model="searchTerm" /> --}}
                            </div>
                        </div>
                        <div class="flex justify-center flex-grow max-h-full mb-6 -mx-3">
                            <div >    
                                <table class="table-fixed w- full">
                                    <thead>
                                        <tr class="h-12 text-xs text-white bg-indigo-600">
                                            <th class="px-4 py-2 ">Codigo</th>
                                            <th class="px-4 py-2 ">Multa</th>
                                            <th class="px-4 py-2 ">Nombre</th>
                                            <th class="px-4 py-2 ">Add</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bdinfraccion1 as $datosMulta)
                                        <tr class="h-20 text-xs">                                           
                                            <td class="px-4 py-2 border">{{$datosMulta->codigo}}</td>
                                            <td class="px-4 py-2 border">{{$datosMulta->multa}}</td>
                                            <td class="px-4 py-2 border">{{$datosMulta->nombre}}</td>
                                            <td>
                                                <button wire:click.prevent="selecCodInf({{$datosMulta->id}})" class="inline-flex justify-center w-full px-4 py-2 text-white transition duration-150 ease-in-out bg-green-500 border border-transparent rounded-md focus:outline-none focus:border-green-500 focus:shadow-outline-green sm:text-xs sm:leading-5">Utilizar</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>

                
            </div>
    </div>
</div>