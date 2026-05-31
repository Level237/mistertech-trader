<section class="relative h-[60vh] w-full overflow-hidden bg-black">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/signaux/signaux10.webp') }}');"></div>
        <!-- Primary (Orangey) Overlay -->
        <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-primary/20 to-black/80"></div>
    </div>

    <!-- Content -->
    <div
        class="relative z-10 container mx-auto px-6 md:px-10 h-full flex flex-col items-center justify-center text-center max-w-7xl">
        <div class="space-y-6">
            <h1 class="text-4xl md:text-7xl font-extrabold text-white animate-fade-in-up">
                Signaux de Haute Précision
            </h1>
            <div class="w-24 h-1.5 bg-white mx-auto rounded-full animate-width-grow"></div>
            <p class="text-white/90 text-lg md:text-xl max-w-2xl mx-auto animate-fade-in-up delay-200">
                 Recevez des opportunités de trading validées par nos experts. Transparence totale, résultats prouvés et analyses techniques détaillées pour chaque entrée.
            </p>
        </div>
    </div>
</section>

<style>
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes width-grow {
        from {
            width: 0;
        }

        to {
            width: 6rem;
        }
    }

    .animate-fade-in-up {
        animation: fade-in-up 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .animate-width-grow {
        animation: width-grow 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .delay-200 {
        animation-delay: 0.2s;
    }
</style>