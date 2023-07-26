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
        <section id="coments">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Comentários</h4>
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">O que os clientes estão comentando após utilizar o sistema</h1>
                </div>

                <!-- coments container -->
                <div class="mt-8">
                    <div class="flex items-center justify-center flex-wrap">
                        <img src="{{ asset('images/user1.jpg') }}" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic border-2 border-solid border-color-secondary" onclick="showReview()">
                        <img src="{{ asset('images/user2.jpg') }}" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="{{ asset('images/user3.jpg') }}" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="{{ asset('images/user4.jpg') }}" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="{{ asset('images/user5.jpg') }}" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                    </div>

                    <div class="grid place-items-center text-center m-auto md:w-4/5 min-h-[40vh]">
                        <div class="user-text active-text">
                            <p class="md:text-2xl mb-6">
                               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores praesentium hic nemo accusamus reprehenderit temporibus esse quas saepe, voluptate, ex id eaque sapiente magni? Quis vero obcaecati facere at sunt.
                            </p>
                            <h4 class="font-bold text-color-secondary mb-1">Fulano de Tal</h4>
                            <p>Profissão desconhecida</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Nossos preços</h4>
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">Sempre tem um que cabe no bolso</h1>

                    <!-- toggle month/year -->
                    <div class="mt-5 flex items-center justify-center gap-4">
                        <p>Mensalidade</p>
                        <label class="cursor-pointer relative inline-block w-20 h-8 rounded-full">
                            <input type="checkbox" id="toggle-btn" class="peer opacity-0 w-0 h-0">
                            <span class="absolute top-0 left-0 right-0 bottom-0 bg-color-primary-light border border-solid border-color-gray rounded-full duration-300 before:content[''] before:absolute before:w-6 before:h-6 before:bottom-1 before:left-1 before:rounded-full before:bg-color-white before:duration-300
                            peer-checked:before:translate-x-12 peer-checked:bg-color-secondary"></span>
                        </label>
                        <p>Anuidade</p>
                    </div>                    
                </div>
                <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <!-- card 1 -->
                    <div class="card relative h-auto w-auto">
                        <!-- front side -->
                        <div id="card_1_front" class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    0,00 <span class="text-sm font-normal tracking-widest">/por mês</span>
                                </p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">FREE</h3>
                                <p class="leading-relaxed">Você pode iniciar com o plano gratuito</p>
                            </div>
                            <ul class="space-y-4 pb-4">
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Categorias</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Produtos</span>                           
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#333" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Mesas</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#333" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Cardápio</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#333" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Suporte</span>                                      
                                </li>
                            </ul>

                            <button class="w-full px-9 py-3 bg-color-primary-dark rounded-md capitalize font-bold hover:bg-color-secondary ease-in duration-200">Assinar</button>
                        </div>
                        <!-- back side -->
                        <div id="card_1_back" class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    0,00 <span class="text-sm font-normal tracking-widest">/por ano</span>
                                </p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">FREE</h3>
                                <p class="leading-relaxed">Você pode iniciar com o plano gratuito</p>
                            </div>
                            <ul class="space-y-4 pb-4">
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Categorias</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Produtos</span>                           
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#333" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Mesas</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#333" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Cardápio</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#333" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Suporte</span>                                      
                                </li>
                            </ul>

                            <button class="w-full px-9 py-3 bg-color-primary-dark rounded-md capitalize font-bold hover:bg-color-secondary ease-in duration-200">Assinar</button>
                        </div>
                    </div>


                    <!-- card 2 -->
                    <div class="card relative h-auto w-auto">
                        <!-- front side -->
                        <div id="card_2_front" class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    25,00 <span class="text-sm font-normal tracking-widest">/por mês</span>
                                </p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">PREMIUM</h3>
                                <p class="leading-relaxed">Para empreendimentos de médio porte</p>
                            </div>
                            <ul class="space-y-4 pb-4">
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Categorias</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Produtos</span>                           
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Mesas</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Cardápio</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#333" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Suporte</span>                                      
                                </li>
                            </ul>

                            <button class="w-full px-9 py-3 bg-color-primary-dark rounded-md capitalize font-bold hover:bg-color-secondary ease-in duration-200">Assinar</button>
                        </div>
                        <!-- back side -->
                        <div id="card_2_back" class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    250,00 <span class="text-sm font-normal tracking-widest">/por ano</span>
                                </p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">PREMIUM</h3>
                                <p class="leading-relaxed">Para empreendimentos de médio porte</p>
                            </div>
                            <ul class="space-y-4 pb-4">
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Categorias</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Produtos</span>                           
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Mesas</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Cardápio</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#333" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Suporte</span>                                      
                                </li>
                            </ul>

                            <button class="w-full px-9 py-3 bg-color-primary-dark rounded-md capitalize font-bold hover:bg-color-secondary ease-in duration-200">Assinar</button>
                        </div>
                    </div>

                    <!-- card 3 -->
                    <div class="card relative h-auto w-auto">
                        <!-- front side -->
                        <div id="card_3_front" class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    50,00 <span class="text-sm font-normal tracking-widest">/por mês</span>
                                </p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">BUSINESS</h3>
                                <p class="leading-relaxed">Para empreendimentos de qualquer tamanho</p>
                            </div>
                            <ul class="space-y-4 pb-4">
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Categorias</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Produtos</span>                           
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Mesas</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Cardápio</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Suporte</span>                                      
                                </li>
                            </ul>

                            <button class="w-full px-9 py-3 bg-color-primary-dark rounded-md capitalize font-bold hover:bg-color-secondary ease-in duration-200">Assinar</button>
                        </div>
                        <!-- back side -->
                        <div id="card_3_back" class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    500,00 <span class="text-sm font-normal tracking-widest">/por ano</span>
                                </p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">BUSINESS</h3>
                                <p class="leading-relaxed">Para empreendimentos de qualquer tamanho</p>
                            </div>
                            <ul class="space-y-4 pb-4">
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Categorias</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Produtos</span>                           
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Mesas</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Cardápio</span>                                      
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF7D3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    <span class="pl-4">Suporte</span>                                      
                                </li>
                            </ul>

                            <button class="w-full px-9 py-3 bg-color-primary-dark rounded-md capitalize font-bold hover:bg-color-secondary ease-in duration-200">Assinar</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="text-bold text-color-secondary mb-4">Tem alguma dúvida?</h4>
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">Entre em contato</h1>
                </div>

                <form>
                    <div class="w-full m-auto text-center md:w-2/3">
                        <div class="text-color-primary-dark grid gap-6 mb-6 md:grid-cols-2">
                            <input type="text" name="name" id="name" 
                                class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Nome">
                            <input type="text" name="email" id="email" 
                                class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Email">
                            <input type="text" name="phone_number" id="phone_number" 
                                class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="(XX) XXXXX-XXXX">
                            <input type="text" name="company" id="company" 
                                class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Empresa">

                            
                        </div>
                        <textarea rows="4" class="text-color-primary-dark bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Empresa"></textarea>

                            <button
                            class="bg-color-secondary px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 mt-10">Enviar mensagem
                            </button>
                    </div>

                </form>

            </div>


        </section>
    </main>

    <script>
        // mobile menu
        const hamburger = document.querySelector("#hamburger");
        const menu = document.querySelector("#menu");
        const hLink = document.querySelectorAll("#hLink");
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

        const toggleBtn = document.getElementById("toggle-btn");

        const card_1_front = document.querySelector("#card_1_front");
        const card_1_back = document.querySelector("#card_1_back");

        const card_2_front = document.querySelector("#card_2_front");
        const card_2_back = document.querySelector("#card_2_back");

        const card_3_front = document.querySelector("#card_3_front");
        const card_3_back = document.querySelector("#card_3_back");

        toggleBtn.addEventListener("change", () => {            
            card_1_front.classList.toggle('-rotate-y-180');
            card_1_back.classList.toggle('rotate-y-180');

            card_2_front.classList.toggle('-rotate-y-180');
            card_2_back.classList.toggle('rotate-y-180');

            card_3_front.classList.toggle('-rotate-y-180');
            card_3_back.classList.toggle('rotate-y-180');
        })
        
    </script>
</body>

</html>
