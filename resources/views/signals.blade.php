<x-layouts.app>
    @section('title', 'Signaux de Trading - MrTech Academy')

    <x-signals.hero />

    <section class="py-24 bg-black relative">
        <div class="container mx-auto px-6">
            <div class="mb-16 flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <h2 class="text-4xl md:text-5xl font-black tracking-tighter uppercase italic">
                        Flux de <span class="text-primary not-italic">Signaux</span>
                    </h2>
                    <p class="text-gray-400 mt-4 max-w-2xl">
                        Suivez nos analyses en temps réel. Des opportunités de haute précision basées sur les concepts SMC et ICT.
                    </p>
                </div>

                {{-- Filter Pills Placeholder --}}
                <div class="flex flex-wrap gap-2">
                    <button class="px-6 py-2 rounded-full bg-primary text-black font-bold text-xs uppercase tracking-widest">Tout</button>
                    <button class="px-6 py-2 rounded-full bg-white/5 border border-white/10 text-gray-400 font-bold text-xs uppercase tracking-widest hover:border-primary/50 transition-colors">Forex</button>
                    <button class="px-6 py-2 rounded-full bg-white/5 border border-white/10 text-gray-400 font-bold text-xs uppercase tracking-widest hover:border-primary/50 transition-colors">Indices</button>
                    <button class="px-6 py-2 rounded-full bg-white/5 border border-white/10 text-gray-400 font-bold text-xs uppercase tracking-widest hover:border-primary/50 transition-colors">Crypto</button>
                </div>
            </div>

            <x-signals.signal-grid />
        </div>
    </section>

</x-layouts.app>
