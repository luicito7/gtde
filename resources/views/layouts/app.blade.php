<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Municipalidad Provincial de Puno') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <style>
        .activePanel{
            background-color: rgba(99, 102, 241, var(--tw-bg-opacity));
                
        }

        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        .dropdown-content p {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content p:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
   
    <body x-data="sidebar()" class="text-gray-900 bg-gray-200" @resize.window="handleResize()">
        <div class="min-h-screen lg:flex">
                <div x-show="isOpen()" class="inset-0 flex overflow-auto bg-blue-800 bg-opacity-75 position lg:static">
                    
                    <div @click.away="handleAway()" class="static w-56 h-full text-white bg-gray-800 shadow">
                        <div class="flex content-between bg-gray-700">
                            <img src="../img/Escudo_de_Puno_mini.png" alt="ESCUDO DE PUNO" class="p-1 w-14" > 
                            <div class="w-full p-1 text-sm ">Municipalidad Provincial de Puno</div>
                            <a	@click.prevent="handleClose()" class="flex items-center flex-1 p-3 hover:bg-indigo-500"	href="#">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"	fill="none"	viewBox="0 0 24 24" 	stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </a>
                        </div>
                        <div class="{{'dashboard'==request()->path()?'activePanel':''}}">
                            <a	class="flex items-center w-full p-3 hover:bg-indigo-500" href="{{route('dashboard')}}" >
                                <i class="fas fa-home"></i><p class="pl-1 text-sm"> Inicio</p>
                            </a>
                        </div>
                        
                        <div x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-gray-100 cursor-pointer hover:bg-gray-700 hover:text-gray-100 focus:outline-none">   
                               <a class="flex items-center w-full p-3.5 hover:bg-indigo-500">
                            <i class="fas fa-address-book"></i><p class="pl-1 text-sm"> Registro</p>
                              </a>
                              <span>
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                    <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                           </button>

                           <div x-show="open" class="bg-gray-700">
                           <div class="{{'personas'==request()->path()?'activePanel':''}}">
                               <a	class="flex items-center w-full p-3 px-16 py-2 text-gray-100 hover:bg-indigo-500 hover:text-white" href="{{route('personas')}}" >
                                   <i class="fas fa-users"></i><p class="pl-1 text-sm"> Personas</p>
                               </a>
                           </div>
                           <div class="{{'associations'==request()->path()?'activePanel':''}}">
                               <a	class="flex items-center w-full p-3 px-16 py-2 text-gray-100 hover:bg-indigo-500 hover:text-white" href="{{route('associations')}}" >
                                   <i class="fas fa-user-friends"></i><p class="pl-1 text-sm"> Asociaciones</p>
                               </a>
                           </div>
    
                            </div>
                        </div> 
                        <div class="{{'papeleta-de-infraciones'==request()->path()?'activePanel':''}}">
                            <a class="flex items-center w-full p-3 hover:bg-indigo-500"	href="{{route('papeleta-de-infraciones')}}" >
                                <i class="fas fa-people-carry"></i><p class="pl-1 text-sm">Fiscalizacion</p>
                            </a>
                        </div>

                        <div x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-gray-100 cursor-pointer hover:bg-gray-700 hover:text-gray-100 focus:outline-none">   
                               <a class="flex items-center w-full p-3 hover:bg-indigo-500" href="#" >
                                <i class="fas fa-store"></i></i><p class="pl-1 text-sm">Mercados de Abastos</p>
                              </a>
                              <span>
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                    <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                           </button>
                           <div x-show="open" class="bg-gray-700">
                              <a class="block px-16 py-2 text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="#">Comerciantes</a>
                              <a class="block px-16 py-2 text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="#">Pagos</a>
                            </div>
                        </div>  
                        

                        <div x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-gray-100 cursor-pointer hover:bg-gray-700 hover:text-gray-100 focus:outline-none">   
                               <a class="flex items-center w-full p-3 hover:bg-indigo-500" href="#" >
                                <i class="fas fa-user-tag"></i><p class="pl-1 text-sm">Comercio Ambulatorio </p>
                              </a>
                              <span>
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                    <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                           </button>
                           <div x-show="open" class="bg-gray-700">
                              <a class="block px-16 py-2 text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="#">Asociados</a>
                              
                            </div>
                        </div>  

                        <div class="{{'users.index'==request()->path()?'activePanel':''}}">
                            <a class="flex items-center w-full p-3 hover:bg-indigo-500" href="{{route('users.index')}}" >
                                <i class="fas fa-user-lock"></i><p class="pl-1 text-sm">Usuarios MPP </p>
                            </a>
                        </div>
                    </div>
                </div> 

                <div class="flex-auto">
                        <div class="flex text-gray-700 bg-white">   
                        @livewire('navigation-menu')
                        </div>
                            <!-- Page Content -->
                    
                        <main class="grid gap-4 p-1 lg:grid-cols-1">
                            <div class="shadow-lg">
                                {{ $slot }}
                            </div>
                            
                        </main>

                        <div class="text-sm" id="copyright">Copyright&copy; 2021 - Municipalidad Provincial de Puno - Gerencia de Turismo y Desarrollo Economico- Todos los derechos reservados</div>
                </div>

                @stack('modals')

                @livewireScripts
        </div>
        <script>
			function sidebar() {
				const breakpoint = 1280
				return {
					open: {
						above: true,
						below: false,
					},
					isAboveBreakpoint: window.innerWidth > breakpoint,

					handleResize() {
						this.isAboveBreakpoint = window.innerWidth > breakpoint
					},

					isOpen() {
						console.log(this.isAboveBreakpoint)
						if (this.isAboveBreakpoint) {
							return this.open.above
						}
						return this.open.below
					},
					handleOpen() {
						if (this.isAboveBreakpoint) {
							this.open.above = true
						}
						this.open.below = true
					},
					handleClose() {
						if (this.isAboveBreakpoint) {
							this.open.above = false
						}
						this.open.below = false
					},
					handleAway() {
						if (!this.isAboveBreakpoint) {
							this.open.below = false
						}
					},
				}
			}
		</script>
     </body>
</html>
