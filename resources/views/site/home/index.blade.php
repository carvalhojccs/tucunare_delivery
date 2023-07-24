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

                    <li><button
                            class="bg-color-secondary px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">Login</button>
                    </li>
                </ul>
            </div>
            <!-- mobile screen-->
            <div id="hamburger" class="lg:hidden cursor-pointer z-50">
                <i id="menu-open">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0l-3.75-3.75M17.25 21L21 17.25" />
                    </svg>
                </i>

                <i id="menu-close" class="hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12" />
                    </svg>
                </i>

            </div>
            <div id="menu" class="hidden bg-color-primary-dark h-[100vh] absolute inset-0">
                <ul class="h-full grid place-items-center py-20">
                    <li><a id="hLink" href=""
                            class="hover:text-color-secondary ease-in duration-200">Home</a></li>
                    <li><a id="hLink" href="#features"
                            class="hover:text-color-secondary ease-in duration-200">Recursos</a></li>
                    <li><a id="hLink" href="#coments"
                            class="hover:text-color-secondary ease-in duration-200">Comentários</a></li>
                    <li><a id="hLink" href="#pricing"
                            class="hover:text-color-secondary ease-in duration-200">Preços</a></li>
                    <li><a id="hLink" href="#blog"
                            class="hover:text-color-secondary ease-in duration-200">Blog</a></li>
                    <li><a id="hLink" href="#contact"
                            class="hover:text-color-secondary ease-in duration-200">Contato</a></li>

                    <li><button
                            class="bg-color-secondary px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">Login</button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section id="home" class="relative">
            <div
                class="w-80 h-80 bg-color-blob absolute top-0 -left-5 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full">
            </div>
            <div
                class="w-80 h-80 bg-color-secondary absolute bottom-10 right-0 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full">
            </div>
            <div class="container py-20">
                <div class="flex flex-col items-center z-20 md:flex-row">
                    <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10">
                        <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-4">Melhor sistema de delivery da
                            região</h1>
                        <p class="leading-relaxed mb-10">Ele permite gerenciar suas vendas no estabelecimento além de
                            uma interface para seus clientes realizarem pedidos n-line</p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="{{ asset('images/landing-page-delivery.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Opções de planos</h4>
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">Temos planos para todos os tamanhos de
                        empreendimentos</h1>
                </div>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
                    <!-- card 1 -->
                    <div
                        class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>
                            </i>
                        </div>
                        <h3 class="text-xl font-bold py-4">FREE</h3>
                        <p class="leading-relaxed">
                        <ul>
                            <li>Categorias</li>
                            <li>Produtos</li>                          
                        </ul>
                        </p>
                    </div>
                    <!-- card 2 -->
                    <div
                        class="bg-color-primary-dark border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="flex space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>
                            </i>
                        </div>
                        <h3 class="text-xl font-bold py-4">PREMIUM</h3>
                        <p class="leading-relaxed">
                        <ul>
                            <li>Categorias</li>
                            <li>Produtos</li>
                            <li>Mesas</li>
                            <li>Cardápio</li>
                        </ul>
                        </p>

                    </div>
                    <!-- card 3 -->
                    <div
                        class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="flex space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>
                            </i>
                        </div>
                        <h3 class="text-xl font-bold py-4">BUSINESS</h3>
                        <p class="leading-relaxed">
                            <ul>
                                <li>Categorias</li>
                                <li>Produtos</li>
                                <li>Mesas</li>
                                <li>Cardápio</li>                                
                                <li>Suporte</li>
                            </ul>
                            </p>
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
