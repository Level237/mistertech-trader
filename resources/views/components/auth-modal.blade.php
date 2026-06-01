<template x-teleport="body">

<div x-show="authModalOpen" 
     x-cloak
     class="fixed inset-0 z-[200] flex items-center justify-center p-4 lg:p-6">
    
    {{-- Backdrop with blur --}}
    <div x-show="authModalOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="authModalOpen = false"
         class="absolute inset-0 bg-black/80 backdrop-blur-xl"></div>

    {{-- Modal Container --}}
    <div x-show="authModalOpen"
         x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="relative w-full max-w-md bg-zinc-900 border border-white/10 rounded-[2.5rem] overflow-hidden shadow-[0_50px_100px_-20px_rgba(0,0,0,0.5)]">
        
        {{-- Close Button --}}
        <button @click="authModalOpen = false" class="absolute top-6 right-6 p-2 text-gray-500 hover:text-white transition-colors z-20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>

        {{-- Content --}}
        <div class="p-8 md:p-12">
            <div class="text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/10 border border-primary/20 mb-6 rotate-3">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-black tracking-tighter text-white uppercase italic" x-text="mode === 'login' ? 'Bon retour' : 'Rejoindre l\'Élite'"></h2>
                <p class="text-gray-400 text-sm mt-2" x-text="mode === 'login' ? 'Accédez à votre espace membre' : 'Commencez votre ascension aujourd\'hui'"></p>
            </div>

            <div class="space-y-4">
                {{-- Google Auth (UI Only) --}}
                <button class="w-full flex items-center justify-center gap-3 py-4 rounded-2xl bg-white text-black font-bold text-sm uppercase tracking-widest hover:bg-primary transition-all duration-300">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"/>
                        <path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    Continuer avec Google
                </button>

                <div class="relative py-4">
                    <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-white/5"></div></div>
                    <div class="relative flex justify-center text-xs uppercase tracking-widest text-gray-500"><span class="bg-zinc-900 px-4 italic font-bold">ou via email</span></div>
                </div>

                {{-- Email Form (UI Only) --}}
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest ml-4">Adresse Email</label>
                        <input type="email" placeholder="votre@email.com" class="w-full bg-black/50 border border-white/5 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary transition-colors">
                    </div>
                    <div class="space-y-2" x-show="mode === 'login'">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-widest ml-4">Mot de Passe</label>
                        <input type="password" placeholder="••••••••" class="w-full bg-black/50 border border-white/5 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary transition-colors">
                    </div>
                    
                    <button class="w-full py-4 rounded-2xl bg-primary/10 border border-primary/20 text-primary font-black text-sm uppercase tracking-widest hover:bg-primary hover:text-black transition-all duration-300 shadow-[inset_0_1px_0_rgba(255,255,255,0.05)]">
                        <span x-text="mode === 'login' ? 'Se Connecter' : 'Créer un Compte'"></span>
                    </button>
                </div>
            </div>

            {{-- Toggle Mode --}}
            <div class="mt-10 text-center">
                <button @click="mode = (mode === 'login' ? 'register' : 'login')" class="text-xs font-bold text-gray-500 uppercase tracking-widest hover:text-white transition-colors">
                    <span x-show="mode === 'login'">Pas encore membre ? <span class="text-primary italic">S'inscrire</span></span>
                    <span x-show="mode === 'register'">Déjà membre ? <span class="text-primary italic">Se Connecter</span></span>
                </button>
            </div>
        </div>
    </div>
</div>
</template>