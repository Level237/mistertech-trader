<header x-data="{ mobileMenuOpen: false }" @keydown.window.escape="mobileMenuOpen = false"
    class="sticky top-0 z-50 w-full border-b border-white/10 bg-black/80 backdrop-blur-md">
    <div class="container mx-auto px-4 h-20 flex items-center justify-between">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-3 group relative z-[70]">
            <div
                class="flex items-end gap-0.5 border border-white/20 p-1.5 rounded-lg group-hover:border-primary transition-colors">
                <div class="w-1.5 h-3 bg-primary rounded-sm"></div>
                <div class="w-1.5 h-5 bg-primary rounded-sm"></div>
                <div class="w-1.5 h-4 bg-primary rounded-sm"></div>
            </div>
            <span class="text-xl font-bold tracking-tight text-white group-hover:text-primary transition-colors">
                MrTech <span class="font-light text-white/70">Academy</span>
            </span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center gap-8">
            <a href="#" class="text-sm font-medium text-white/70 hover:text-white transition-colors relative group">
                Formations
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
            </a>
            <a href="#" class="text-sm font-medium text-white/70 hover:text-white transition-colors relative group">
                Signaux trading
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
            </a>
            <a href="#" class="text-sm font-medium text-white/70 hover:text-white transition-colors relative group">
                À propos
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
            </a>
            <a href="#" class="text-sm font-medium text-white/70 hover:text-white transition-colors relative group">
                Témoignages
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
            </a>
        </nav>

        <!-- Desktop Auth Buttons -->
        <div class="hidden lg:flex items-center gap-4">
            <a href="" class="text-sm font-medium text-white/70 hover:text-white transition-colors">
                Connexion
            </a>
            <a href=""
                class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-bold text-black rounded-full bg-white hover:bg-primary hover:text-white transition-all duration-300">
                S'inscrire
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen"
            class="lg:hidden relative z-[70] p-2 text-white/70 hover:text-white transition-colors"
            :class="{ 'text-white': mobileMenuOpen }">
            <span class="sr-only">Toggle menu</span>
            <div class="w-6 h-6 flex flex-col justify-center items-center">
                <span class="block w-5 h-0.5 bg-current transition-all duration-300 ease-out"
                    :class="{ 'rotate-45 translate-y-0.5': mobileMenuOpen, '-translate-y-1': !mobileMenuOpen }"></span>
                <span class="block w-5 h-0.5 bg-current transition-all duration-300 ease-out my-0.5" :class=""></span>
                <span class="block w-5 h-0.5 bg-current transition-all duration-300 ease-out"
                    :class="{ '-rotate-45 -translate-y-1.5': mobileMenuOpen, 'translate-y-1': !mobileMenuOpen }"></span>
            </div>
        </button>
    </div>

    <!-- Mobile Menu (Full Screen Overlay) -->
    <template x-teleport="body">

        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 z-[60] lg:hidden" role="dialog" aria-modal="true">
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-black/95 backdrop-blur-2xl" @click="mobileMenuOpen = false"></div>

            <!-- Menu Content -->
            <nav class="relative h-full flex flex-col justify-center px-8 space-y-8">
                <div class="flex flex-col space-y-6">
                    <a href="#" @click="mobileMenuOpen = false"
                        class="text-xl font-bold text-white hover:text-primary transition-colors">Formations</a>
                    <a href="#" @click="mobileMenuOpen = false"
                        class="text-xl font-bold text-white hover:text-primary transition-colors">Signaux</a>
                    <a href="#" @click="mobileMenuOpen = false"
                        class="text-xl font-bold text-white hover:text-primary transition-colors">À propos</a>
                    <a href="#" @click="mobileMenuOpen = false"
                        class="text-xl font-bold text-white hover:text-primary transition-colors">Témoignages</a>
                </div>

                <div class="pt-8 border-t border-white/10 flex flex-col gap-4">
                    <a href=""
                        class="flex items-center justify-center px-4 py-4 text-md font-semibold text-white border border-white/20 rounded-2xl hover:bg-white/10 transition-all">
                        Connexion
                    </a>
                    <a href=""
                        class="flex items-center justify-center px-4 py-4 text-md font-bold text-black bg-[#00C580] rounded-2xl">
                        S'inscrire
                    </a>
                </div>

                {{-- Socials/Contact --}}
                <div class="absolute bottom-12 left-8 flex gap-6">
                    <span class="text-white/40 text-sm font-medium uppercase tracking-widest">Suivez-nous</span>
                    <!-- Simplified icons -->
                    <div class="w-5 h-5 bg-primary/20 rounded-full"></div>
                    <div class="w-5 h-5 bg-primary/20 rounded-full"></div>
                </div>
            </nav>
        </div>
    </template>
</header>