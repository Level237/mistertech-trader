<section class="relative py-24 lg:py-32 bg-black overflow-hidden">
    {{-- Decorative Background --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary/5 blur-[120px] rounded-full opacity-50">
        </div>
        <div class="absolute inset-0 bg-[radial-gradient(#ffffff03_1px,transparent_1px)] bg-[size:32px_32px]"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-5xl mx-auto">
            {{-- Header Content --}}
            <div class="text-center mb-16 space-y-4 animate-in fade-in slide-in-from-bottom duration-1000">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 backdrop-blur-md">
                    <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-primary">Découvrez MrTech</span>
                </div>
                <h2 class="text-4xl lg:text-6xl font-black tracking-tight text-white">
                    Plus qu'une académie, <br>
                    <span class="text-primary">un écosystème de réussite.</span>
                </h2>
                <p class="text-white/50 text-lg max-w-2xl mx-auto font-medium">
                    Plongez dans l'univers de MrTech et découvrez comment nous transformons des passionnés en traders
                    d'élite grâce à une approche concrète et innovante.
                </p>
            </div>

            {{-- Video Player Container --}}
            <div class="relative group animate-in fade-in zoom-in duration-1000 delay-200">
                {{-- Decorative Glow --}}
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-primary/50 to-emerald-500/50 blur-2xl opacity-20 group-hover:opacity-40 transition-opacity duration-700">
                </div>

                {{-- Frame --}}
                <div
                    class="relative aspect-video rounded-[2.5rem] border border-white/10 bg-white/5 p-2 backdrop-blur-sm overflow-hidden">
                    <div class="w-full h-full rounded-[2rem] overflow-hidden bg-black shadow-2xl">
                        <iframe width="100%" height="100%"
                            src="https://www.youtube.com/embed/_rKmLB7BQng?si=6drqX_qeeJcRfzat?autoplay=1"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

            </div>

            {{-- CTA --}}
            <div class="mt-20 text-center animate-in fade-in slide-in-from-top duration-1000 delay-500">
                <a href="#"
                    class="group relative inline-flex items-center gap-3 px-10 py-5 bg-white text-black font-black rounded-2xl hover:bg-primary hover:text-white transition-all duration-300 active:scale-95 overflow-hidden">
                    <span class="relative z-10">EN SAVOIR PLUS</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 relative z-10 group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>

                    {{-- Button Glow Effect --}}
                    <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes bounce-slow {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .animate-bounce-slow {
        animation: bounce-slow 4s ease-in-out infinite;
    }
</style>