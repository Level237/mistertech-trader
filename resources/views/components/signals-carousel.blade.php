<section class="relative py-24 lg:py-32 bg-black overflow-hidden border-t border-white/5">
    {{-- Decorative Background --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-primary/10 blur-[150px] rounded-full opacity-40"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        {{-- Header --}}
        <div class="text-center mb-16 space-y-6 animate-in fade-in slide-in-from-bottom duration-1000">
           
            <h2 class="text-4xl lg:text-6xl font-black tracking-tight text-white leading-tight">
                Nos Signaux de <span class="text-primary">Trading</span>
            </h2>
            <p class="text-white/50 text-lg max-w-2xl mx-auto font-medium leading-relaxed">
                Rejoignez des centaines de traders qui utilisent nos analyses haute fidélité pour capturer les meilleures opportunités du marché chaque jour.
            </p>
        </div>
    </div>

    {{-- Infinite Carousel --}}
    <div class="relative w-full overflow-hidden py-10">
        {{-- Gradient Masks for smooth fade --}}
        <div class="absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-black to-transparent z-20"></div>
        <div class="absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-black to-transparent z-20"></div>

        <div class="flex gap-6 animate-marquee whitespace-nowrap will-change-transform">
            {{-- Loop twice for seamless transition --}}
            @for ($i = 0; $i < 2; $i++)
                <div class="flex gap-6 items-center">
                    @foreach (range(1, 15) as $index)
                        <div class="relative w-72 lg:w-96 aspect-[16/10] rounded-3xl overflow-hidden border border-white/10 bg-white/5 group transition-transform duration-500 hover:scale-[1.02]">
                            <img 
                                src="{{ asset('images/slider' . $index . '.jpg') }}" 
                                alt="Signal Trading {{ $index }}" 
                                class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-500"
                                loading="lazy"
                            >
                            {{-- Glass Overlay on Hover --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>
                                    </div>
                                    <span class="text-white font-bold text-sm">Résultat vérifié</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endfor
        </div>
    </div>

    <div class="container mx-auto px-4 relative z-10 mt-16">
        {{-- CTAs --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6 animate-in fade-in slide-in-from-top duration-1000 delay-500">
            <a href="/signaux" class="group relative w-full sm:w-auto px-10 py-5 bg-primary text-black font-black rounded-2xl transition-all duration-300 hover:bg-white active:scale-95 text-center overflow-hidden">
                <span class="relative z-10">VOIR LES SIGNAUX</span>
                {{-- Subtle internal glow --}}
                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity"></div>
            </a>
            
            <a href="https://t.me/mrtech237forex_academy" target="_blank" class="w-full sm:w-auto px-10 py-5 bg-white/5 border border-white/10 text-white font-bold rounded-2xl backdrop-blur-xl hover:bg-white/10 hover:border-primary/50 transition-all duration-300 flex items-center justify-center gap-3 active:scale-95">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#24A1DE]">
                    <path d="M21.5 3L2 11L9.17 14.5L21.5 3Z" fill="currentColor"/>
                    <path d="M9.17 14.5L12.5 21L21.5 3L9.17 14.5Z" fill="currentColor"/>
                    <path d="M9.17 14.5L11.5 16.5L12.5 21L9.17 14.5Z" fill="currentColor" opacity="0.8"/>
                    <path d="M9.17 14.5L11.5 16.5L11.5 19L9.17 14.5Z" fill="currentColor" opacity="0.6"/>
                </svg>
                REJOINDRE MON CANAL
            </a>
        </div>
    </div>
</section>

<style>
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .animate-marquee {
        animation: marquee 60s linear infinite;
    }
    /* Pause on hover for better UX */
    .animate-marquee:hover {
        animation-play-state: paused;
    }
</style>
