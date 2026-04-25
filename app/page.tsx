'use client';

import { motion } from 'motion/react';
import { 
  Instagram, 
  MapPin, 
  Clock, 
  Phone, 
  ChevronRight, 
  Star, 
  UtensilsCrossed, 
  Truck, 
  ShoppingBag,
  MessageCircle
} from 'lucide-react';
import Image from 'next/image';
import { useState, useEffect } from 'react';

// --- Components ---

const Navbar = () => {
  const [isScrolled, setIsScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => setIsScrolled(window.scrollY > 50);
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <nav className={`fixed top-0 w-full z-50 transition-all duration-500 ${isScrolled ? 'bg-black/90 backdrop-blur-md py-4 border-b border-white/10' : 'bg-transparent py-6'}`}>
      <div className="max-w-7xl mx-auto px-6 flex justify-between items-center">
        <div className="flex items-center gap-2">
          <span className="font-serif text-2xl font-bold tracking-tighter text-white">
            DREAM<span className="text-gold">BURGUER</span>
          </span>
        </div>
        <div className="hidden md:flex items-center gap-8 text-sm uppercase tracking-widest font-medium">
          <a href="#experiencia" className="hover:text-gold transition-colors">Experiência</a>
          <a href="#cardapio" className="hover:text-gold transition-colors">Cardápio</a>
          <a href="#localizacao" className="hover:text-gold transition-colors">Localização</a>
          <a href="#contato" className="bg-gold text-black px-6 py-2 rounded-full hover:bg-white transition-all font-bold">Pedir Agora</a>
        </div>
      </div>
    </nav>
  );
};

const Hero = () => {
  return (
    <section className="relative h-screen flex items-center justify-center overflow-hidden">
      {/* Background Image with Overlay */}
      <div className="absolute inset-0 z-0">
        <Image 
          src="https://images.unsplash.com/photo-1594212699903-ec8a3eca50f5?q=80&w=2071&auto=format&fit=crop"
          alt="Juicy Burguer on Grill"
          fill
          className="object-cover opacity-60"
          priority
          referrerPolicy="no-referrer"
        />
        <div className="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-black smoke-overlay" />
      </div>

      <div className="relative z-10 text-center px-6 max-w-4xl">
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8 }}
        >
          <div className="flex items-center justify-center gap-2 mb-6">
            <div className="h-[1px] w-12 bg-gold" />
            <span className="text-gold uppercase tracking-[0.3em] text-xs font-bold">Lanches & Hot Dogs Artesanais</span>
            <div className="h-[1px] w-12 bg-gold" />
          </div>
          
          <h1 className="font-serif text-5xl md:text-8xl mb-6 leading-tight tracking-tight text-balance">
            O sabor que você sempre <span className="italic text-gold">sonhou</span> em Jarinu
          </h1>
          
          <p className="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
            Hambúrgueres suculentos, hot dogs espetaculares e uma entrega que chega voando até você.
          </p>

          <div className="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a 
              href="https://wa.me/5511912918829"
              target="_blank"
              rel="noopener noreferrer"
              className="w-full sm:w-auto bg-gold text-black px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:scale-105 transition-all flex items-center justify-center gap-2 group"
            >
              Ver Cardápio
              <ChevronRight className="w-5 h-5 group-hover:translate-x-1 transition-transform" />
            </a>
            <a 
              href="https://wa.me/5511912918829"
              target="_blank"
              rel="noopener noreferrer"
              className="w-full sm:w-auto border border-white/30 backdrop-blur-sm text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition-all text-center"
            >
              Pedir Agora
            </a>
          </div>

          <div className="mt-12 flex items-center justify-center gap-4 text-sm text-gray-400">
            <div className="flex text-gold">
              <Star className="w-4 h-4 fill-current" />
              <Star className="w-4 h-4 fill-current" />
              <Star className="w-4 h-4 fill-current" />
              <Star className="w-4 h-4 fill-current" />
              <Star className="w-4 h-4 text-gold/30" />
            </div>
            <span><strong className="text-white">3.7 no Google</strong> | 12 avaliações</span>
          </div>
        </motion.div>
      </div>

      {/* Scroll Indicator */}
      <motion.div 
        animate={{ y: [0, 10, 0] }}
        transition={{ duration: 2, repeat: Infinity }}
        className="absolute bottom-10 left-1/2 -translate-x-1/2 text-gold/50"
      >
        <div className="w-[1px] h-12 bg-gradient-to-b from-gold to-transparent mx-auto" />
      </motion.div>
    </section>
  );
};

const About = () => {
  const highlights = [
    { icon: <UtensilsCrossed className="w-6 h-6" />, title: "Ingredientes Premium", desc: "Carnes nobres e insumos selecionados." },
    { icon: <Star className="w-6 h-6" />, title: "Preparo Artesanal", desc: "Técnicas texanas de defumação e grelha." },
    { icon: <Instagram className="w-6 h-6" />, title: "Ambiente Aconchegante", desc: "O lugar perfeito para momentos especiais." },
    { icon: <Clock className="w-6 h-6" />, title: "Música ao Vivo", desc: "Experiência completa com boa música." },
  ];

  return (
    <section id="experiencia" className="py-24 bg-black relative overflow-hidden">
      <div className="max-w-7xl mx-auto px-6">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          <motion.div
            initial={{ opacity: 0, x: -50 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.8 }}
          >
            <span className="text-gold uppercase tracking-widest text-sm font-bold mb-4 block">Nossa Essência</span>
            <h2 className="font-serif text-4xl md:text-5xl mb-8 leading-tight">
              Na Dream Burguer, cada mordida é um <span className="text-gold italic">sonho</span>.
            </h2>
            <p className="text-gray-400 text-lg leading-relaxed mb-10">
              Nascemos da paixão por criar o lanche perfeito. Em Jarinu, somos referência em qualidade e rapidez, utilizando ingredientes sempre frescos para garantir que sua experiência seja impecável, do WhatsApp até a entrega em sua casa.
            </p>
            
            <div className="grid sm:grid-cols-2 gap-8">
              {highlights.map((item, idx) => (
                <div key={idx} className="flex gap-4">
                  <div className="text-gold mt-1">{item.icon}</div>
                  <div>
                    <h4 className="font-bold mb-1">{item.title}</h4>
                    <p className="text-sm text-gray-500">{item.desc}</p>
                  </div>
                </div>
              ))}
            </div>
          </motion.div>

          <motion.div
            initial={{ opacity: 0, scale: 0.9 }}
            whileInView={{ opacity: 1, scale: 1 }}
            viewport={{ once: true }}
            transition={{ duration: 0.8 }}
            className="relative aspect-square"
          >
            <div className="absolute inset-0 border border-gold/20 translate-x-6 translate-y-6 rounded-2xl" />
            <Image 
              src="https://images.unsplash.com/photo-1550547660-d9450f859349?q=80&w=1965&auto=format&fit=crop"
              alt="Premium Burguer Detail"
              fill
              className="object-cover rounded-2xl luxury-shadow"
              referrerPolicy="no-referrer"
            />
          </motion.div>
        </div>
      </div>
    </section>
  );
};

const MenuHighlights = () => {
  const items = [
    { 
      title: "Lanches Artesanais", 
      desc: "Hambúrgueres montados com cuidado e ingredientes de primeira qualidade.",
      img: "https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=1899&auto=format&fit=crop"
    },
    { 
      title: "Hot Dogs Espetaculares", 
      desc: "O melhor hot dog da região, com destaque para o nosso Catupiry irresistível.",
      img: "https://images.unsplash.com/photo-1612392062126-772c1fb60906?q=80&w=1965&auto=format&fit=crop"
    },
    { 
      title: "Delivery Rápido", 
      desc: "Seu lanche chega quente e bem embalado, pronto para ser saboreado.",
      img: "https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=2070&auto=format&fit=crop"
    },
  ];

  return (
    <section id="cardapio" className="py-24 bg-[#0a0a0a]">
      <div className="max-w-7xl mx-auto px-6">
        <div className="text-center mb-16">
          <span className="text-gold uppercase tracking-widest text-sm font-bold mb-4 block">Destaques</span>
          <h2 className="font-serif text-4xl md:text-5xl">O Melhor do Cardápio</h2>
        </div>

        <div className="grid md:grid-cols-3 gap-8">
          {items.map((item, idx) => (
            <motion.div
              key={idx}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: idx * 0.2 }}
              className="group cursor-pointer"
            >
              <div className="relative h-80 mb-6 overflow-hidden rounded-2xl">
                <Image 
                  src={item.img}
                  alt={item.title}
                  fill
                  className="object-cover transition-transform duration-700 group-hover:scale-110"
                  referrerPolicy="no-referrer"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60" />
              </div>
              <h3 className="font-serif text-2xl mb-2 group-hover:text-gold transition-colors">{item.title}</h3>
              <p className="text-gray-500 text-sm leading-relaxed">{item.desc}</p>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

const Testimonials = () => {
  const reviews = [
    { name: "Katrine Serena", text: "Os lanches são deliciosos, entrega rápida, bom atendimento no whatsapp, um achado em Jarinu viu 👏🏻👏🏻👏🏻", rating: 5 },
    { name: "Bruna Guimarães", text: "Simplismente o MELHOR hot dog de Jarinu! O Catupiry é um DEBOCHE de tão bom! Espetacular!", rating: 5 },
    { name: "Guilherme Henrique Santos", text: "Lugar maravilhoso e lanche impecável. Atendimento nota 10!", rating: 5 },
  ];

  return (
    <section className="py-24 bg-black">
      <div className="max-w-7xl mx-auto px-6">
        <div className="text-center mb-16">
          <h2 className="font-serif text-4xl">O que dizem nossos clientes</h2>
        </div>
        <div className="grid md:grid-cols-3 gap-8">
          {reviews.map((review, idx) => (
            <motion.div
              key={idx}
              whileHover={{ y: -10 }}
              className="p-8 bg-[#111] rounded-2xl border border-white/5 luxury-shadow"
            >
              <div className="flex text-gold mb-4">
                {[...Array(review.rating)].map((_, i) => (
                  <Star key={i} className="w-4 h-4 fill-current" />
                ))}
              </div>
              <p className="text-gray-300 italic mb-6 leading-relaxed">&quot;{review.text}&quot;</p>
              <p className="font-bold text-sm uppercase tracking-widest text-gold">{review.name}</p>
            </motion.div>
          ))}
        </div>

        <div className="mt-16 text-center">
          <a 
            href="https://www.google.com/search?q=Dream+Burguer+Jarinu+avaliações"
            target="_blank"
            rel="noopener noreferrer"
            className="inline-flex items-center gap-2 text-gold hover:text-white transition-colors font-bold uppercase tracking-widest text-sm border-b border-gold/30 pb-1 hover:border-white"
          >
            Ver todas as avaliações no Google
            <ChevronRight className="w-4 h-4" />
          </a>
        </div>
      </div>
    </section>
  );
};

const OrderMethods = () => {
  const methods = [
    { icon: <UtensilsCrossed className="w-10 h-10" />, title: "Consumo no Local", desc: "Aproveite nosso ambiente sofisticado." },
    { icon: <ShoppingBag className="w-10 h-10" />, title: "Retirada na Porta", desc: "Peça e retire com agilidade." },
    { icon: <Truck className="w-10 h-10" />, title: "Entrega Rápida", desc: "O sabor da Dream Burguer no conforto da sua casa." },
  ];

  return (
    <section className="py-24 bg-[#0a0a0a]">
      <div className="max-w-7xl mx-auto px-6 text-center">
        <h2 className="font-serif text-4xl mb-16">Como você prefere saborear?</h2>
        <div className="grid md:grid-cols-3 gap-12 mb-16">
          {methods.map((method, idx) => (
            <div key={idx} className="flex flex-col items-center">
              <div className="w-20 h-20 bg-gold/10 rounded-full flex items-center justify-center text-gold mb-6 border border-gold/20">
                {method.icon}
              </div>
              <h3 className="text-xl font-bold mb-2">{method.title}</h3>
              <p className="text-gray-500">{method.desc}</p>
            </div>
          ))}
        </div>
        <a 
          href="https://wa.me/5511912918829"
          target="_blank"
          rel="noopener noreferrer"
          className="bg-gold text-black px-12 py-5 rounded-full font-bold text-xl hover:bg-white hover:scale-105 transition-all shadow-xl shadow-gold/10 inline-block"
        >
          Pedir agora
        </a>
      </div>
    </section>
  );
};

const Location = () => {
  return (
    <section id="localizacao" className="py-24 bg-black">
      <div className="max-w-7xl mx-auto px-6">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          <div>
            <span className="text-gold uppercase tracking-widest text-sm font-bold mb-4 block">Onde Estamos</span>
            <h2 className="font-serif text-4xl mb-8">Onde Estamos</h2>
            <div className="space-y-6 mb-10">
              <div className="flex items-start gap-4">
                <MapPin className="text-gold w-6 h-6 mt-1" />
                <div>
                  <p className="text-lg text-gray-300">R. Ticiano - Dos Ivo</p>
                  <p className="text-gray-500">Jarinu/SP – 13240-000</p>
                </div>
              </div>
              <div className="flex items-start gap-4">
                <Clock className="text-gold w-6 h-6 mt-1" />
                <div>
                  <p className="text-lg text-gray-300">Segunda a Domingo</p>
                  <p className="text-gray-500">Aberto até 23:00</p>
                </div>
              </div>
              <div className="flex items-start gap-4">
                <Phone className="text-gold w-6 h-6 mt-1" />
                <p className="text-lg text-gray-300">(11) 91291-8829</p>
              </div>
            </div>
            <button 
            onClick={() => window.open('https://www.google.com/maps/dir/?api=1&destination=Dream+Burguer+Rua+Ticiano+Dos+Ivo+Jarinu+SP', '_blank')}
              className="border border-gold text-gold px-8 py-4 rounded-full font-bold hover:bg-gold hover:text-black transition-all flex items-center gap-2"
            >
              <MapPin className="w-5 h-5" />
              Traçar Rota
            </button>
          </div>
          <div className="h-[450px] rounded-2xl overflow-hidden border border-white/10 grayscale contrast-125 hover:grayscale-0 transition-all duration-700">
            {/* Mock Map with Image */}
            <iframe 
              src="https://maps.google.com/maps?q=Rua%20Ticiano%20Dos%20Ivo%20Jarinu%20SP&t=&z=15&ie=UTF8&iwloc=&output=embed" 
              width="100%" 
              height="100%" 
              style={{ border: 0 }} 
              allowFullScreen 
              loading="lazy"
              className="opacity-80"
            ></iframe>
          </div>
        </div>
      </div>
    </section>
  );
};

const CTAFinal = () => {
  return (
    <section className="relative py-32 overflow-hidden">
      <div className="absolute inset-0 z-0">
        <Image 
          src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1974&auto=format&fit=crop"
          alt="Grill Fire"
          fill
          className="object-cover opacity-40"
          referrerPolicy="no-referrer"
        />
        <div className="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent" />
      </div>
      <div className="relative z-10 max-w-4xl mx-auto px-6 text-center">
        <motion.div
          initial={{ opacity: 0, scale: 0.9 }}
          whileInView={{ opacity: 1, scale: 1 }}
          viewport={{ once: true }}
        >
          <h2 className="font-serif text-5xl md:text-6xl mb-8 leading-tight">
            Seu próximo hambúrguer <span className="text-gold italic">inesquecível</span> está aqui
          </h2>
          <a 
            href="https://wa.me/5511912918829"
            target="_blank"
            rel="noopener noreferrer"
            className="bg-gold text-black px-12 py-6 rounded-full font-bold text-2xl hover:bg-white hover:scale-105 transition-all shadow-2xl shadow-gold/20 inline-block"
          >
            Fazer Pedido Agora
          </a>
        </motion.div>
      </div>
    </section>
  );
};

const Footer = () => {
  return (
    <footer className="py-12 bg-black border-top border-white/5">
      <div className="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
        <div className="font-serif text-2xl font-bold tracking-tighter">
          DREAM<span className="text-gold">BURGUER</span>
        </div>
        <div className="text-gray-500 text-sm">
          © {new Date().getFullYear()} Dream Burguer. Todos os direitos reservados.
        </div>
        <div className="flex gap-6">
          <a 
            href="https://www.instagram.com/dreamburgerjarinu" 
            target="_blank" 
            rel="noopener noreferrer" 
            className="text-gray-400 hover:text-gold transition-colors"
          >
            <Instagram className="w-6 h-6" />
          </a>
        </div>
      </div>
    </footer>
  );
};

const WhatsAppButton = () => {
  return (
    <a 
      href="https://wa.me/5511912918829" 
      target="_blank" 
      rel="noopener noreferrer"
      className="fixed bottom-8 right-8 z-50 bg-[#25D366] text-white p-4 rounded-full shadow-2xl hover:scale-110 transition-transform flex items-center justify-center group"
    >
      <MessageCircle className="w-8 h-8" />
      <span className="absolute right-full mr-4 bg-white text-black px-4 py-2 rounded-lg text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-xl">
        Fale conosco no WhatsApp
      </span>
    </a>
  );
};

export default function LandingPage() {
  return (
    <main className="min-h-screen font-sans selection:bg-gold selection:text-black">
      <Navbar />
      <Hero />
      <About />
      <MenuHighlights />
      <Testimonials />
      <OrderMethods />
      <Location />
      <CTAFinal />
      <Footer />
      <WhatsAppButton />
    </main>
  );
}
