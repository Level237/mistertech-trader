<header x-data="{ mobileMenuOpen: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
    @keydown.window.escape="mobileMenuOpen = false"
    :class="scrolled ? 'top-6 max-w-6xl mx-auto rounded-[2rem] border border-white/10 bg-black/40 backdrop-blur-2xl shadow-[0_20px_50px_rgba(0,0,0,0.3)]' : 'top-0 w-full border-b border-transparent bg-transparent'"
    class="fixed left-0 right-0 z-50 transition-all duration-700 ease-in-out px-4 lg:px-8">
    <div class="mx-auto flex items-center justify-between transition-all duration-700"
        :class="scrolled ? 'h-16 px-2' : 'h-24 px-0'">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-3 group relative z-[70]">
            <div class="flex items-end gap-0.5 border border-white/10 p-1.5 rounded-xl group-hover:border-primary transition-all duration-500"
                :class="scrolled ? 'scale-90' : 'scale-100'">
                <div class="w-1.5 h-3 bg-primary rounded-sm shadow-[0_0_10px_rgba(0,197,128,0.5)]"></div>
                <div class="w-1.5 h-5 bg-primary rounded-sm shadow-[0_0_10px_rgba(0,197,128,0.5)]"></div>
                <div class="w-1.5 h-4 bg-primary rounded-sm shadow-[0_0_10px_rgba(0,197,128,0.5)]"></div>
            </div>
            <span class="text-xl font-black tracking-tighter text-white group-hover:text-primary transition-colors">
                MrTech<span class="font-light text-white/50 group-hover:text-white/80 transition-colors">Academy</span>
            </span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center gap-1">
            @php
                $navItems = [
                    ['label' => 'Formations', 'url' => '#'],
                    ['label' => 'Signaux', 'url' => '#'],
                    ['label' => 'À propos', 'url' => '#'],
                    ['label' => 'Témoignages', 'url' => '#'],
                ];
            @endphp
            @foreach($navItems as $item)
                <a href="{{ $item['url'] }}"
                    class="px-5 py-2 text-sm font-bold text-white/60 hover:text-white transition-all duration-300 relative group">
                    {{ $item['label'] }}
                    <span
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-1 bg-primary rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
                </a>
            @endforeach
        </nav>

        <!-- Desktop Auth Buttons -->
        <div class="hidden lg:flex items-center gap-3">
            <a href="#" class="px-5 py-2 text-sm font-bold text-white/70 hover:text-white transition-colors">
                Connexion
            </a>
            <a href="#"
                class="relative inline-flex items-center justify-center px-8 py-2.5 text-sm font-black text-black bg-white rounded-full hover:bg-primary hover:text-white transition-all duration-500 group overflow-hidden"
                :class="scrolled ? 'px-6 py-2' : 'px-8 py-2.5'">
                <span class="relative z-10">S'INSCRIRE</span>
                <div
                    class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = true"
            class="lg:hidden relative z-[70] p-3 text-white/70 hover:text-white transition-all bg-white/5 rounded-2xl border border-white/10">
            <span class="sr-only">Open menu</span>
            <div class="w-6 h-5 flex flex-col justify-between">
                <span class="w-6 h-0.5 bg-current rounded-full"></span>
                <span class="w-4 h-0.5 bg-current rounded-full ml-auto"></span>
                <span class="w-6 h-0.5 bg-current rounded-full"></span>
            </div>
        </button>
    </div>

    <!-- Mobile Menu (Full Screen Overlay) -->
    <template x-teleport="body">
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 backdrop-blur-0" x-transition:enter-end="opacity-100 backdrop-blur-2xl"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 backdrop-blur-2xl" x-transition:leave-end="opacity-0 backdrop-blur-0"
            class="fixed inset-0 z-[100] lg:hidden" role="dialog" aria-modal="true">
            <!-- Background Overlay -->
            <div class="fixed inset-0 bg-black/95" @click="mobileMenuOpen = false"></div>

            <!-- Close Button (Top Right) -->
            <button @click="mobileMenuOpen = false"
                class="absolute top-8 right-8 z-[110] p-4 text-white/50 hover:text-white bg-white/5 rounded-full border border-white/10 transition-all hover:rotate-90">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Menu Content -->
            <nav class="relative h-full flex flex-col justify-center px-10 space-y-12 overflow-y-auto">
                {{-- Logo in Menu --}}
                <div class="absolute top-10 left-10">
                    <div class="flex items-center gap-3">
                        <div class="flex items-end gap-0.5 border border-primary/30 p-1.5 rounded-xl">
                            <div class="w-1.5 h-3 bg-primary rounded-sm shadow-[0_0_10px_rgba(0,197,128,0.5)]"></div>
                            <div class="w-1.5 h-5 bg-primary rounded-sm shadow-[0_0_10px_rgba(0,197,128,0.5)]"></div>
                            <div class="w-1.5 h-4 bg-primary rounded-sm shadow-[0_0_10px_rgba(0,197,128,0.5)]"></div>
                        </div>
                        <span class="text-xl font-black tracking-tighter text-white">MrTech<span
                                class="font-light text-white/50 group-hover:text-white/80 transition-colors">Academy</span></span>
                    </div>
                </div>

                <div class="flex flex-col gap-5 mt-44 ">
                    @php
                        $mobileNavItems = [
                            ['label' => 'Formations', 'desc' => 'Devenez un trader pro'],
                            ['label' => 'Signaux', 'desc' => 'Précision haute fidélité'],
                            ['label' => 'À propos', 'desc' => 'Notre vision'],
                            ['label' => 'Témoignages', 'desc' => 'Ils ont réussi'],
                        ];
                    @endphp
                    @foreach($mobileNavItems as $item)
                        <a href="#" @click="mobileMenuOpen = false"
                            class="group flex flex-col space-y-1 animate-in fade-in slide-in-from-left duration-500"
                            style="animation-delay: {{ $loop->index * 100 }}ms">
                            <span
                                class="text-2xl font-black text-white group-hover:text-primary transition-all duration-300 tracking-tighter flex items-center gap-4">
                                {{ $item['label'] }}
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 opacity-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>

                        </a>
                    @endforeach
                </div>

                <div class="pt-12 border-t border-white/10 flex flex-col gap-5">
                    <a href="#"
                        class="flex items-center text-sm justify-center py-4 text-lg font-bold text-white border border-white/20 rounded-3xl hover:bg-white/5 transition-all">
                        Connexion
                    </a>
                    <a href="#"
                        class="flex items-center text-sm justify-center py-4 text-lg font-black text-black bg-primary rounded-3xl shadow-[0_10px_30px_rgba(0,197,128,0.3)]">
                        INSCRIPTION
                    </a>
                </div>

                {{-- Socials --}}
                <div class="flex gap-6 pt-10">
                    <div
                        class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-primary transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </div>
                    <div
                        class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-primary transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </div>
                </div>
            </nav>
        </div>
    </template>
</header>