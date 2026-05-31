<section class="relative min-h-[40dvh] flex items-center overflow-hidden bg-zinc-950 pt-20">
    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/slider13.jpg') }}" alt="Formation Hero" class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent"></div>
    </div>

    {{-- Content --}}
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold uppercase tracking-widest mb-6 animate-fade-in">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Academy de Trading
            </div>
            <h1 class="text-5xl md:text-7xl font-black tracking-tighter leading-none mb-6 animate-slide-in-from-left uppercase italic">
                Devenez un Expert <br>
                <span class="text-primary not-italic">des Marchés</span>
            </h1>
            <p class="text-lg text-gray-400 leading-relaxed max-w-[60ch] animate-fade-in delay-200">
                Nos formations sont conçues pour vous transmettre les compétences techniques et psychologiques nécessaires pour dominer le trading institutionnel (SMC/ICT).
            </p>
        </div>
    </div>

    {{-- Decorative Mesh --}}
    <div class="absolute top-0 right-0 w-1/2 h-full bg-primary/5 blur-[120px] rounded-full pointer-events-none -translate-y-1/2 translate-x-1/4"></div>
</section>
