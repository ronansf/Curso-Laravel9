@yield('menu')
<!-- Menu Começa aqui -->
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Logo Lateral esquerdo -->
                    <a href="#" class="flex items-center py-4 px-2">
                        <img src= "{{ url('images/logoredondo.png') }}" alt="Logo" class="flex h-8 w-8 mr-8">
                    </a>
                </div>
                <!-- Primeiro Menu -->
                <div class="hidden md:flex items-center space-x-1">
                        <a href="{{ route('menus.view',1)}}" class="py-1 px-3 text-gray-500 font-semibold hover:border-b-2 border-red-500  transition duration-300 shadow">Home</a>
                        <div id="1" class="relative group">
                             <button class="flex items-center rounded py-2 px-3 bg-white focus:border-blue-500 text-sm text-gray-800 hover:border-b-2 border-red-500 focus:outline-none placeholder-gray-300 font-semibold hover:text-green-500 shadow">
                                Empresa
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>  
                            </button>   
                            <div class="absolute invisible group-hover:visible bg-white border-gray-300 py-1 shadow-md rounded-md">
                                    <a href="{{route('menus.view',2)}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">QuenSomos</a>
                                    <a href="{{route('menus.view',3)}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Termo de Aceite</a>
                                    <a href="{{route('menus.view',4)}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Serviço</a>
                                    <a href="{{route('menus.view',5)}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Como Funciona</a>
                                    <a href="{{route('menus.view',6)}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Cadastro</a>
                                    <a href="{{route('menus.view',7)}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Login/Senha</a>
                           </div>
                        </div>
                        <div id="2"class="relative group">
                        <button class="flex items-center rounded py-2 px-3 bg-white focus:border-blue-500 text-sm text-gray-800 focus:outline-none placeholder-gray-300 font-semibold hover:border-b-2 border-red-500 hover:text-green-500 shadow">
                           Desempenho
                           <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>  
                       </button>   
                       <div class="absolute invisible group-hover:visible bg-white border-gray-300 py-1 shadow-md rounded-md">
                               <a href="{{route('menus.view',8)}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Simulação</a>
                               <a href="{{route('menus.view',9)}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Jogos Jogados e Premiados</a>
                               <a href="{{route('menus.view',10)}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Jogos Não Jogados e Premiados</a>
                        </div>
                   </div>
                        <div id="3"class="relative group">
                            <button class="flex items-center rounded py-2 px-3 bg-white focus:border-blue-500 text-sm text-gray-800 focus:outline-none placeholder-gray-300 font-semibold hover:border-b-2 border-red-500 hover:text-green-500 shadow">
                               Jogos
                               <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>  
                           </button>   
                           <div class="absolute invisible group-hover:visible bg-white border-gray-300 py-1 shadow-md rounded-md">
                                   <a href="{{route('menus.view',11)}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Adquirir Jogos</a>
                                   <a href="{{route('menus.view',12)}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Jogos Não Jogados</a>
                            </div>
                       </div>
                                                
                        <a href="{{route('menus.view',13)}}" class="py-1 px-3 text-gray-500 font-semibold hover:text-green-500 hover:border-b-2 border-red-500 transition duration-300 shadow">Conferência</a>
                        <a href="{{route('menus.view',14)}}" class="py-1 px-3 text-gray-500 font-semibold hover:text-green-500 hover:border-b-2 border-red-500 transition duration-300 shadow">Pagamentos</a>
                        <a href="{{route('menus.view',15)}}" class="py-1 px-3 text-gray-500 font-semibold hover:text-green-500 hover:border-b-2 border-red-500 transition duration-300 shadow">Dúvidas</a>
                        <a href="{{route('menus.view',16)}}" class="py-1 px-3 text-gray-500 font-semibold hover:text-green-500 hover:border-b-2 border-red-500 transition duration-300 shadow">Videos</a>
                        <a href="{{route('menus.view',17)}}" class="py-1 px-3 text-gray-500 font-semibold hover:text-green-500 hover:border-b-2 border-red-500 transition duration-300 shadow">Contato</a>
                        <a href="{{route('menus.view',18)}}" class="py-1 px-3 text-gray-500 font-semibold hover:text-green-500 hover:border-b-2 border-red-500 transition duration-300 shadow">Chat</a>
                        <a href="{{route('menus.view',19)}}" class="py-1 px-3 text-gray-500 font-semibold hover:text-green-500 hover:border-b-2 border-red-500 transition duration-300 shadow">Aplicativo</a>
                        <div id="4" class="relative group">
                            <button class="flex items-center rounded py-2 px-3 bg-white focus:border-blue-500 text-sm text-gray-800 hover:border-b-2 border-red-500 focus:outline-none placeholder-gray-300 font-semibold hover:text-green-500 shadow">
                               Admin
                               <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>  
                            </button>   
                            <div class="absolute invisible group-hover:visible bg-white border-gray-300 py-1 shadow-md rounded-md">
                                   <a href="{{ route('menus.index')}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Menus</a>
                                   <a href="{{ route('users.index')}}" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">Usuários</a>
                                   <a href="#" class="block text-sm py-1 px-3 text-gray-500 font-semibold bg-white hover:text-blue-800 hover:underline transition duration-300">ImpCombina</a>
                            </div>
                       </div>
                </div>
            </div>
            <!-- Segundo Menu -->
            <div class="hidden md:flex items-center space-x-3 ">
              <!--  <a href="" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Login</a>
                <a href="" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Logout</a> -->
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                    x-show="!showMenu"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
            <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a></li>
            <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a></li>
            <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a></li>
        </ul>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>
<h1 class="text-green-500 text-2xl md:text-3xl lg:text-4xl font-bold p-4"></h1>
