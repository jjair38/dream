<?php
/**
 * DREAM BURGUER - LANDING PAGE PREMIUM COMPLETA
 * Versão: 1.1 (PHP/HTML/Tailwind) - Corrigido link de imagem
 */

// Configurações Gerais
$unidade = "Jarinu - SP";
$whatsapp_numero = "5511912918829";
$whatsapp_link = "https://wa.me/" . $whatsapp_numero;
$menu_link = "https://wa.me/5511912918829";
$google_maps_rota = "https://www.google.com/maps/dir/?api=1&destination=Dream+Burguer+Rua+Ticiano+Dos+Ivo+Jarinu+SP";
?>
<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Burguer | Sabor Irresistível em <?php echo $unidade; ?></title>
    
    <!-- Meta Tags -->
    <meta name="description" content="Os melhores lanches e hot dogs de Jarinu. Experiência artesanal, entrega rápida e qualidade impecável.">
    
    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    colors: {
                        gold: '#D4AF37',
                        fire: '#FF4500',
                    }
                }
            }
        }
    </script>

    <style>
        .smoke-overlay {
            background: radial-gradient(circle at center, transparent, rgba(0, 0, 0, 0.85));
        }
        .luxury-shadow {
            box-shadow: 0 10px 40px -10px rgba(212, 175, 55, 0.25);
        }
        .bg-dark-900 { background-color: #050505; }
        .bg-dark-800 { background-color: #0a0a0a; }
        .text-balance { text-wrap: balance; }
        
        /* Scrollbar Customizada */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #000; }
        ::-webkit-scrollbar-thumb { background: #1a1a1a; border-radius: 10px; border: 2px solid #000; }
        ::-webkit-scrollbar-thumb:hover { background: #D4AF37; }
    </style>
</head>
<body class="bg-black text-white antialiased font-sans">

    <!-- 1. NAVBAR -->
    <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-500 py-6 bg-transparent">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <div class="font-serif text-2xl font-bold tracking-tighter">
                DREAM<span class="text-gold">BURGUER</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-sm uppercase tracking-widest font-semibold">
                <a href="#experiencia" class="hover:text-gold transition-colors">Experiência</a>
                <a href="#cardapio" class="hover:text-gold transition-colors">Cardápio</a>
                <a href="#localizacao" class="hover:text-gold transition-colors">Localização</a>
                <a href="<?php echo $whatsapp_link; ?>" class="bg-gold text-black px-6 py-2 rounded-full hover:bg-white transition-all font-bold">Pedir Agora</a>
            </div>
            <div class="md:hidden text-gold">
                <i data-lucide="menu"></i>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1594212699903-ec8a3eca50f5?q=80&w=2071" alt="Dream Burguer Burguer" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-black smoke-overlay"></div>
        </div>

        <div class="relative z-10 text-center px-6 max-w-4xl animate__animated animate__fadeIn">
            <div class="flex items-center justify-center gap-2 mb-6">
                <div class="h-[1px] w-12 bg-gold"></div>
                <span class="text-gold uppercase tracking-[0.3em] text-xs font-bold">Lanches & Hot Dogs Artesanais</span>
                <div class="h-[1px] w-12 bg-gold"></div>
            </div>
            
            <h1 class="font-serif text-5xl md:text-8xl mb-6 leading-tight tracking-tight text-balance">
                O sabor que você sempre <span class="italic text-gold">sonhou</span> em Jarinu
            </h1>
            
            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
                Hambúrgueres suculentos, hot dogs espetaculares e uma entrega que chega voando até você.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="<?php echo $menu_link; ?>" target="_blank" class="w-full sm:w-auto bg-gold text-black px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:scale-105 transition-all flex items-center justify-center gap-2 group">
                    Ver Cardápio <i data-lucide="chevron-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="<?php echo $whatsapp_link; ?>" target="_blank" class="w-full sm:w-auto border border-white/30 backdrop-blur-sm text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition-all text-center">
                    Pedir Agora
                </a>
            </div>

            <div class="mt-12 flex items-center justify-center gap-4 text-sm text-gray-400">
                    <div class="flex text-gold">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 text-gold/30"></i>
                    </div>
                    <span><strong class="text-white">3.7 no Google</strong> | 12 avaliações</span>
            </div>
        </div>
    </section>

    <!-- 3. SOBRE A EXPERIÊNCIA -->
    <section id="experiencia" class="py-24 bg-black relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-gold uppercase tracking-widest text-sm font-bold mb-4 block">Nossa Essência</span>
                    <h2 class="font-serif text-4xl md:text-5xl mb-8 leading-tight">
                        Na Dream Burguer, cada mordida é um <span class="text-gold italic">sonho</span>.
                    </h2>
                    <p class="text-gray-400 text-lg leading-relaxed mb-10">
                        Nascemos da paixão por criar o lanche perfeito. Em Jarinu, somos referência em qualidade e rapidez, utilizando ingredientes sempre frescos para garantir que sua experiência seja impecável.
                    </p>
                    
                    <div class="grid sm:grid-cols-2 gap-8">
                        <div class="flex gap-4">
                            <div class="text-gold"><i data-lucide="check-circle" class="w-6 h-6"></i></div>
                            <div><h4 class="font-bold">Ingredientes Premium</h4></div>
                        </div>
                        <div class="flex gap-4">
                            <div class="text-gold"><i data-lucide="check-circle" class="w-6 h-6"></i></div>
                            <div><h4 class="font-bold">Preparo Artesanal</h4></div>
                        </div>
                        <div class="flex gap-4">
                            <div class="text-gold"><i data-lucide="check-circle" class="w-6 h-6"></i></div>
                            <div><h4 class="font-bold">Ambiente Aconchegante</h4></div>
                        </div>
                        <div class="flex gap-4">
                            <div class="text-gold"><i data-lucide="check-circle" class="w-6 h-6"></i></div>
                            <div><h4 class="font-bold">Música ao Vivo</h4></div>
                        </div>
                    </div>
                </div>

                <div class="relative aspect-square">
                    <div class="absolute inset-0 border border-gold/20 translate-x-6 translate-y-6 rounded-2xl"></div>
                    <img src="https://images.unsplash.com/photo-1550547660-d9450f859349" alt="Burguer Premium" class="w-full h-full object-cover rounded-2xl luxury-shadow relative z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- 4. DESTAQUES DO CARDÁPIO -->
    <section id="cardapio" class="py-24 bg-dark-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-gold uppercase tracking-widest text-sm font-bold mb-4 block">O Melhor do Fogo</span>
                <h2 class="font-serif text-4xl md:text-5xl">Destaques do Cardápio</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Burguer -->
                <div class="group cursor-pointer">
                    <div class="relative h-80 mb-6 overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd" alt="Lanches Artesanais" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60"></div>
                    </div>
                    <h3 class="font-serif text-2xl mb-2 group-hover:text-gold transition-colors">🍔 Lanches Artesanais</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Hambúrgueres montados com cuidado e ingredientes de primeira qualidade.</p>
                </div>
                <!-- Hot Dog -->
                <div class="group cursor-pointer">
                    <div class="relative h-80 mb-6 overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1612392062126-772c1fb60906" alt="Hot Dog Especial" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60"></div>
                    </div>
                    <h3 class="font-serif text-2xl mb-2 group-hover:text-gold transition-colors">🌭 Hot Dogs Espetaculares</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">O melhor hot dog da região, com destaque para o nosso Catupiry irresistível.</p>
                </div>
                <!-- Delivery -->
                <div class="group cursor-pointer">
                    <div class="relative h-80 mb-6 overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591" alt="Delivery Rápido" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60"></div>
                    </div>
                    <h3 class="font-serif text-2xl mb-2 group-hover:text-gold transition-colors">📦 Delivery Rápido</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Seu lanche chega quente e bem embalado, pronto para ser saboreado.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PROVA SOCIAL (AVALIAÇÕES) -->
    <section class="py-24 bg-black">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-serif text-4xl">O que dizem nossos clientes</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="p-8 bg-dark-800 rounded-2xl border border-white/5 luxury-shadow">
                    <div class="flex text-gold mb-4">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-300 italic mb-6 leading-relaxed">“Os lanches são deliciosos, entrega rápida, bom atendimento no whatsapp, um achado em Jarinu viu 👏🏻👏🏻👏🏻”</p>
                    <p class="font-bold text-sm uppercase tracking-widest text-gold">Katrine Serena</p>
                </div>
                <!-- Review 2 -->
                <div class="p-8 bg-dark-800 rounded-2xl border border-white/5 luxury-shadow">
                    <div class="flex text-gold mb-4">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-300 italic mb-6 leading-relaxed">“Simplismente o MELHOR hot dog de Jarinu! O Catupiry é um DEBOCHE de tão bom! Espetacular!”</p>
                    <p class="font-bold text-sm uppercase tracking-widest text-gold">Bruna Guimarães</p>
                </div>
                <!-- Review 3 -->
                <div class="p-8 bg-dark-800 rounded-2xl border border-white/5 luxury-shadow">
                    <div class="flex text-gold mb-4">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-300 italic mb-6 leading-relaxed">“Lugar maravilhoso e lanche impecável. Atendimento nota 10!”</p>
                    <p class="font-bold text-sm uppercase tracking-widest text-gold">Guilherme Henrique Santos</p>
                </div>
            </div>

            <div class="mt-16 text-center">
                <a href="https://www.google.com/search?q=Dream+Burguer+Jarinu+avaliações" target="_blank" class="inline-flex items-center gap-2 text-gold hover:text-white transition-colors font-bold uppercase tracking-widest text-sm border-b border-gold/30 pb-1 hover:border-white">
                    Ver todas as avaliações no Google <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. FORMAS DE PEDIDO -->
    <section class="py-24 bg-dark-800">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="font-serif text-4xl mb-16">Como você prefere saborear?</h2>
            <div class="grid md:grid-cols-3 gap-12 mb-16">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-gold/10 rounded-full flex items-center justify-center text-gold mb-6 border border-gold/20">
                        <i data-lucide="utensils" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">🍽️ Consumo no local</h3>
                    <p class="text-gray-500">Aproveite nosso ambiente sofisticado e acolhedor.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-gold/10 rounded-full flex items-center justify-center text-gold mb-6 border border-gold/20">
                        <i data-lucide="shopping-bag" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">🚗 Retirada na porta</h3>
                    <p class="text-gray-500">Peça pelo WhatsApp e retire com agilidade.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-gold/10 rounded-full flex items-center justify-center text-gold mb-6 border border-gold/20">
                        <i data-lucide="truck" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">📦 Entrega Rápida</h3>
                    <p class="text-gray-500">O sabor da Dream Burguer no conforto da sua casa.</p>
                </div>
            </div>
            <a href="<?php echo $whatsapp_link; ?>" class="inline-block bg-gold text-black px-12 py-5 rounded-full font-bold text-xl hover:bg-white hover:scale-105 transition-all shadow-xl shadow-gold/10">
                Pedir agora
            </a>
        </div>
    </section>

    <!-- 7. LOCALIZAÇÃO E HORÁRIO -->
    <section id="localizacao" class="py-24 bg-black">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-gold uppercase tracking-widest text-sm font-bold mb-4 block">Onde Estamos</span>
                    <h2 class="font-serif text-4xl mb-8">Onde Estamos</h2>
                    <div class="space-y-8 mb-10">
                        <div class="flex items-start gap-4">
                            <i data-lucide="map-pin" class="text-gold w-6 h-6 mt-1"></i>
                            <div>
                                <p class="text-lg text-gray-300">📍 R. Ticiano - Dos Ivo</p>
                                <p class="text-gray-500">Jarinu/SP – 13240-000</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i data-lucide="clock" class="text-gold w-6 h-6 mt-1"></i>
                            <div>
                                <p class="text-lg text-gray-300">Segunda a Domingo</p>
                                <p class="text-gold font-bold">⏰ Aberto até 23:00</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i data-lucide="phone" class="text-gold w-6 h-6 mt-1"></i>
                            <div>
                                <p class="text-lg text-gray-300">(11) 91291-8829</p>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo $google_maps_rota; ?>" target="_blank" class="inline-flex items-center gap-2 border border-gold text-gold px-8 py-4 rounded-full font-bold hover:bg-gold hover:text-black transition-all">
                        <i data-lucide="navigation" class="w-5 h-5"></i>
                        Traçar Rota
                    </a>
                </div>
                <div class="h-[450px] rounded-2xl overflow-hidden border border-white/10 grayscale contrast-125 hover:grayscale-0 transition-all duration-700">
                    <iframe 
                        src="https://maps.google.com/maps?q=Rua%20Ticiano%20Dos%20Ivo%20Jarinu%20SP&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="opacity-80">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. CTA FINAL -->
    <section class="relative py-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5" alt="Fogo Grelha" class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
            <h2 class="font-serif text-5xl md:text-6xl mb-8 leading-tight">
                Seu próximo hambúrguer <span class="text-gold italic">inesquecível</span> está aqui
            </h2>
            <a href="<?php echo $whatsapp_link; ?>" class="inline-block bg-gold text-black px-12 py-6 rounded-full font-bold text-2xl hover:bg-white hover:scale-105 transition-all shadow-2xl shadow-gold/20">
                👉 Fazer Pedido Agora
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-12 bg-black border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="font-serif text-2xl font-bold tracking-tighter">
                DREAM<span class="text-gold">BURGUER</span>
            </div>
            <div class="text-gray-500 text-sm">
                © <?php echo date('Y'); ?> Dream Burguer. Todos os direitos reservados.
            </div>
            <div class="flex gap-6">
                <a href="https://www.instagram.com/dreamburgerjarinu" target="_blank" class="text-gray-400 hover:text-gold transition-colors"><i data-lucide="instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- WHATSAPP FLUTUANTE -->
    <a href="<?php echo $whatsapp_link; ?>" target="_blank" class="fixed bottom-8 right-8 z-50 bg-[#25D366] text-white p-4 rounded-full shadow-2xl hover:scale-110 transition-transform flex items-center justify-center group">
        <i data-lucide="message-circle" class="w-8 h-8"></i>
        <span class="absolute right-full mr-4 bg-white text-black px-4 py-2 rounded-lg text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-xl">
            Fale conosco no WhatsApp
        </span>
    </a>

    <script>
        // Inicializar ícones Lucide
        lucide.createIcons();

        // Efeito de Scroll na Navbar
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.classList.add('bg-black/95', 'backdrop-blur-md', 'py-4', 'border-b', 'border-white/10');
                nav.classList.remove('bg-transparent', 'py-6');
            } else {
                nav.classList.remove('bg-black/95', 'backdrop-blur-md', 'py-4', 'border-b', 'border-white/10');
                nav.classList.add('bg-transparent', 'py-6');
            }
        });
    </script>
</body>
</html>
