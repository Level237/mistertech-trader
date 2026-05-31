<footer class="relative bg-black pt-20 pb-10 overflow-hidden border-t border-white/5">
    {{-- Decorative elements --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-px bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>
    <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-96 h-96 bg-primary/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8">
            {{-- Brand Section --}}
            <div class="lg:col-span-4 space-y-8">
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
                <p class="text-gray-400 max-w-sm leading-relaxed">
                    L'académie de référence pour maîtriser le trading de précision. Apprenez les stratégies des institutionnels et rejoignez une communauté d'élite.
                </p>
                <div class="flex items-center gap-4">
                    {{-- Telegram --}}
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-primary hover:text-black hover:border-primary transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.07-.2-.08-.06-.19-.04-.27-.02-.12.02-1.96 1.25-5.54 3.69-.52.36-1 .53-1.42.52-.47-.01-1.37-.26-2.03-.48-.82-.27-1.47-.42-1.42-.88.03-.24.36-.48.99-.74 3.84-1.67 6.4-2.77 7.67-3.3 3.64-1.51.4-.2.4-.2z"/></svg>
                    </a>
                    {{-- YouTube --}}
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-primary hover:text-black hover:border-primary transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    </a>
                    {{-- Instagram --}}
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-primary hover:text-black hover:border-primary transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Links Sections --}}
            <div class="lg:col-span-2 space-y-6">
                <h4 class="text-white font-bold uppercase tracking-widest text-sm">Formation</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">Débutant</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">Intermédiaire</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">Expert SMC</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">Mentorat</a></li>
                </ul>
            </div>

            <div class="lg:col-span-2 space-y-6">
                <h4 class="text-white font-bold uppercase tracking-widest text-sm">Outils</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">Signaux Live</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">Indicateurs</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">Calculateurs</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">Journal</a></li>
                </ul>
            </div>

            <div class="lg:col-span-4 space-y-8">
                <div class="p-6 rounded-2xl bg-white/5 border border-white/10 space-y-4">
                    <h4 class="text-white font-bold">Rejoignez la newsletter</h4>
                    <p class="text-sm text-gray-400">Recevez nos analyses hebdomadaires et opportunités exclusives.</p>
                    <form class="flex gap-2">
                        <input type="email" placeholder="votre@email.com" class="flex-1 bg-black border border-white/10 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-primary transition-colors">
                        <button type="submit" class="bg-primary text-black font-bold px-4 py-2 rounded-lg text-sm hover:bg-white transition-colors duration-300">OK</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="mt-20 pt-8 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-gray-500 text-sm">
                &copy; {{ date('Y') }} MrTech Academy. Tous droits réservés.
            </div>
            <div class="flex items-center gap-8 text-sm text-gray-500">
                <a href="#" class="hover:text-white transition-colors">Mentions Légales</a>
                <a href="#" class="hover:text-white transition-colors">Confidentialité</a>
                <a href="#" class="hover:text-white transition-colors">CGV</a>
            </div>
        </div>
    </div>
</footer>
