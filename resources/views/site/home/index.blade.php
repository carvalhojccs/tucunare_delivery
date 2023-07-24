<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tucunaré Delivery</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-color-primary text-color-white tracking-wide">
    <header>
        <nav class="container flex justify-between items-center">
            <div class="py-5 text-color-secondary font-bold text-3xl">
                <a href="#home">
                    <span class="text-color-white">Tucunaré</span> Delivery
                </a>
            </div>
            <div>
                <ul class="hidden lg:flex items-center space-x-6">
                    <li><a href="#home" class="hover:text-color-secondary ease-in duration-200">Home</a></li>
                    <li><a href="#features" class="hover:text-color-secondary ease-in duration-200">Recursos</a></li>
                    <li><a href="#coments" class="hover:text-color-secondary ease-in duration-200">Comentários</a></li>
                    <li><a href="#pricing" class="hover:text-color-secondary ease-in duration-200">Preços</a></li>
                    <li><a href="#blog" class="hover:text-color-secondary ease-in duration-200">Blog</a></li>
                    <li><a href="#contact" class="hover:text-color-secondary ease-in duration-200">Contato</a></li>
    
                    <li><button class="bg-color-secondary px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">Login</button></li>
                </ul>
            </div>
            <!-- mobile screen-->
            <div id="hamburger" class="lg:hidden cursor-pointer z-50">
                <i id="menu-open">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0l-3.75-3.75M17.25 21L21 17.25" />
                </svg>
                </i>

            <i id="menu-close" class="hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12" />
                </svg>
            </i>
                  
            </div>
            <div id="menu" class="hidden bg-color-primary-dark h-[100vh] absolute inset-0">
                <ul class="h-full grid place-items-center py-20">
                    <li><a id="hLink" href="" class="hover:text-color-secondary ease-in duration-200">Home</a></li>
                    <li><a id="hLink" href="#features" class="hover:text-color-secondary ease-in duration-200">Recursos</a></li>
                    <li><a id="hLink" href="#coments" class="hover:text-color-secondary ease-in duration-200">Comentários</a></li>
                    <li><a id="hLink" href="#pricing" class="hover:text-color-secondary ease-in duration-200">Preços</a></li>
                    <li><a id="hLink" href="#blog" class="hover:text-color-secondary ease-in duration-200">Blog</a></li>
                    <li><a id="hLink" href="#contact" class="hover:text-color-secondary ease-in duration-200">Contato</a></li>
    
                    <li><button class="bg-color-secondary px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">Login</button></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section id="home" class="relative">
            <div class="w-80 h-80 bg-color-blob absolute top-0 -left-5 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>
            <div class="w-80 h-80 bg-color-secondary absolute bottom-10 right-0 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>
            <div class="container py-20">
                <div class="flex flex-col items-center z-20 md:flex-row">
                    <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10">
                        <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-4">Melhor sistema de delivery da região</h1>
                        <p class="leading-relaxed mb-10">Ele permite gerenciar suas vendas no estabelecimento além de uma interface para seus clientes realizarem pedidos n-line</p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="{{ asset('images/landing-page-delivery.png') }}" alt="">
                    </div>
                </div>
            </div>

        </section>
    </main>

    <script>
        // mobile menu
        const hamburger = document.querySelector("#hamburger");
        const menu = document.querySelector("#menu");
        const hLink = document.querySelector("#hLink");
        const menuOpen = document.getElementById("menu-open");
        const menuClose = document.getElementById("menu-close");

        hamburger.addEventListener("click", () => {
            menu.classList.toggle("hidden");
            menuOpen.classList.toggle("hidden");            
            menuClose.classList.toggle("hidden");            
        })

        hLink.forEach(link => {
            link.addEventListener("click", () => {
                menu.classList.toggle("hidden");
                menuOpen.classList.toggle("hidden");            
                menuClose.classList.toggle("hidden");
            })
        });
    </script>
</body>
</html>