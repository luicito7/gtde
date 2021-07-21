<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0" >
    
        <div class="flex items-center justify-center min-h-screen py-6 font-sans bg-gray-400 min-w-screen">
           
           
                <div class="container">
                
                    <div class="flex flex-col px-5 py-3 mb-5 bg-white card rounded-xl">
                        

                        <div class="flex flex-wrap mb-6 -mx-3">
                            
                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="nombreasoc">
                                NOMBRE ASOCIACION
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="nombreasoc" type="text" wire:model="nombreasoc">
                            </div>

                            
                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="dnirepre">
                                DNI REPRESENTANTE
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="dnirepre" type="text" wire:model="dnirepre">
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                </div>
                            </div>

                            
                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="dnideleg">
                                DNI DELEGADO
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="dnideleg" type="text" wire:model="dnideleg">
                            </div>
                        </div>
                        

                        <div class="flex flex-wrap mb-6 -mx-3">
                            
                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="ubicacion">
                                UBICACION
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="ubicacion" type="text" wire:model="ubicacion">
                            </div>

                            
                            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="rubroasoc">
                                RUBRO ASOCIACION
                            </label>
                            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-blue-100 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="rubroasoc" type="text" wire:model="rubroasoc">
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                </div>
                            </div>

                            
                        </div>


                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="cerrarModal3()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-gray-200 border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">Cancelar</button>
                        </span>
                        
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-purple-600 border border-transparent rounded-md shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green sm:text-sm sm:leading-5">Guardar</button>
                        </span>



                    </div>
                    
                </div>
            

        </div>

    </div>
</div>