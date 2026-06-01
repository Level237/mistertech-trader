<header x-data="{ mobileMenuOpen: false, scrolled: false, authModalOpen: false, mode: 'login' }" @scroll.window="scrolled = (window.pageYOffset > 20)"
    @keydown.window.escape="mobileMenuOpen = false; authModalOpen = false"
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
                    ['label' => 'Formations', 'url' => route('formation')],
                    ['label' => 'Signaux', 'url' => route('signaux')],
                    ['label' => 'À propos', 'url' => ""],
                    ['label' => 'Témoignages', 'url' => '#'],
                ];
            @endphp
            @foreach($navItems as $item)
                <a href="{{ $item['url'] }}"
                    class="px-5 py-2 text-md font-bold text-white/60 hover:text-white transition-all duration-300 relative group">
                    {{ $item['label'] }}
                    <span
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-1 bg-primary rounded-full transition-all duration-300 group-hover:w-4 opacity-0 group-hover:opacity-100"></span>
                </a>
            @endforeach
        </nav>

        <!-- Desktop Auth Buttons -->
        <div class="hidden lg:flex items-center gap-3">
            <button @click="authModalOpen = true; mode = 'login'" class="px-5 py-2 text-sm font-bold text-white/70 hover:text-white transition-colors cursor-pointer outline-none">
                Connexion
            </button>
            <button @click="authModalOpen = true; mode = 'register'"
                class="relative inline-flex items-center justify-center px-8 py-2.5 text-sm font-black text-black bg-white rounded-full hover:bg-primary hover:text-white transition-all duration-500 group overflow-hidden cursor-pointer outline-none"
                :class="scrolled ? 'px-6 py-2' : 'px-8 py-2.5'">
                <span class="relative z-10 uppercase">S'inscrire</span>
                <div
                    class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
            </button>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = true"
            class="lg:hidden relative z-[70] p-3 text-white/70 hover:text-white transition-all bg-white/5 rounded-2xl border border-white/10 outline-none">
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
            class="fixed inset-0 z-[100] lg:hidden" role="dialog" aria-modal="true" x-cloak>
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
                                class="font-light text-white/50">Academy</span></span>
                    </div>
                </div>

                <div class="flex flex-col gap-5 mt-44 ">
                    @php
                        $mobileNavItems = [
                            ['label' => 'Formations', 'url' => route('formation'), 'desc' => 'Devenez un trader pro'],
                            ['label' => 'Signaux', 'url' => route('signaux'), 'desc' => 'Précision haute fidélité'],
                            ['label' => 'À propos', 'url' => "", 'desc' => 'Notre vision'],
                            ['label' => 'Témoignages', 'url' => '#', 'desc' => 'Ils ont réussi'],
                        ];
                    @endphp
                    @foreach($mobileNavItems as $item)
                        <a href="{{ $item['url'] }}" @click="mobileMenuOpen = false"
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
                    <button @click="mobileMenuOpen = false; authModalOpen = true; mode = 'login'"
                        class="flex items-center justify-center py-4 text-lg font-bold text-white border border-white/20 rounded-3xl hover:bg-white/5 transition-all cursor-pointer outline-none">
                        Connexion
                    </button>
                    <button @click="mobileMenuOpen = false; authModalOpen = true; mode = 'register'"
                        class="flex items-center justify-center py-4 text-lg font-black text-black bg-primary rounded-3xl shadow-[0_10px_30px_rgba(0,197,128,0.3)] cursor-pointer outline-none">
                        INSCRIPTION
                    </button>
                </div>

                {{-- Socials --}}
                <div class="flex gap-6 pt-10">
                    <div class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-primary transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.07-.2-.08-.06-.19-.04-.27-.02-.12.02-1.96 1.25-5.54 3.69-.52.36-1 .53-1.42.52-.47-.01-1.37-.26-2.03-.48-.82-.27-1.47-.42-1.42-.88.03-.24.36-.48.99-.74 3.84-1.67 6.4-2.77 7.67-3.3 3.64-1.51.4-.2.4-.2z"/></svg>
                    </div>
                </div>
            </nav>
        </div>
    </template>

    <x-auth-modal />
</header>
