<section class="relative py-24 lg:py-32 bg-black overflow-hidden border-t border-white/5">
    {{-- Background elements --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-primary/5 blur-[120px] rounded-full opacity-30"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            {{-- Header --}}
            <div class="text-center mb-20 space-y-6 animate-in fade-in slide-in-from-bottom duration-1000">
                <h2 class="text-3xl lg:text-5xl font-black tracking-tight text-white">
                    Formation Trading <span class="text-primary italic">Pour Débutant</span>
                </h2>
                <p class="text-white/60 text-lg font-medium leading-relaxed max-w-2xl mx-auto">
                    Obtenez ma formation complète pour débutants et commencez à générer des revenus constants. Suivez ces <span class="text-white font-bold underline decoration-primary/50 underline-offset-4">3 étapes simples</span> :
                </p>
            </div>

            {{-- Horizontal Stepper Implementation --}}
            <div class="relative">
                {{-- Desktop Connecting Line --}}
                <div class="hidden lg:block absolute top-12 left-[15%] right-[15%] h-0.5 bg-gradient-to-r from-primary/50 via-white/10 to-primary/50 z-0"></div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-8 relative z-10">
                    
                    {{-- Step 1 --}}
                    <div class="flex flex-col items-center text-center group animate-in fade-in slide-in-from-bottom duration-1000 delay-100">
                        {{-- Indicator --}}
                        <div class="relative mb-8">
                            <div class="w-24 h-24 rounded-3xl bg-black border-2 border-primary flex items-center justify-center text-3xl font-black text-primary shadow-[0_0_30px_rgba(0,197,128,0.2)] group-hover:scale-110 transition-transform duration-500">
                                1
                            </div>
                            <div class="absolute -inset-2 bg-primary/20 blur-xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        
                        {{-- Content --}}
                        <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-8 rounded-[2.5rem] group-hover:border-primary/30 transition-all duration-500 h-full flex flex-col">
                            <h3 class="text-xl font-bold text-white mb-4">Créez votre compte</h3>
                            <p class="text-white/50 text-sm mb-8 leading-relaxed flex-grow">
                                Étape cruciale pour accéder aux marchés financiers avec les meilleurs outils du marché.
                            </p>
                            <a href="https://affs.click/f3PtW" target="_blank" class="group/btn relative inline-flex items-center justify-center gap-2 px-6 py-3 bg-primary/10 border border-primary/20 rounded-xl text-primary font-bold hover:bg-primary hover:text-black transition-all duration-300">
                                Ouvrir mon compte
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover/btn:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    {{-- Step 2 --}}
                    <div class="flex flex-col items-center text-center group animate-in fade-in slide-in-from-bottom duration-1000 delay-300">
                        {{-- Indicator --}}
                        <div class="relative mb-8">
                            <div class="w-24 h-24 rounded-3xl bg-black border-2 border-white/20 group-hover:border-primary flex items-center justify-center text-3xl font-black text-white group-hover:text-primary transition-all duration-500">
                                2
                            </div>
                        </div>
                        
                        {{-- Content --}}
                        <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-8 rounded-[2.5rem] group-hover:border-primary/30 transition-all duration-500 h-full flex flex-col">
                            <h3 class="text-xl font-bold text-white mb-4">Remplissez le formulaire</h3>
                            <p class="text-white/50 text-sm mb-8 leading-relaxed flex-grow">
                                Indiquez vos informations pour que nous puissions valider votre éligibilité à la session de formation.
                            </p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfmTk9YHbUl-tWMt2TXDIYL11YH3p_qogNO0M25layR-vR34w/viewform?usp=publish-editor" target="_blank" class="group/btn relative inline-flex items-center justify-center gap-2 px-6 py-3 bg-white/5 border border-white/10 rounded-xl text-white font-bold hover:bg-primary hover:text-black hover:border-primary transition-all duration-300">
                                Accéder au formulaire
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover/btn:translate-y-[-2px] group-hover/btn:translate-x-[2px] transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="flex flex-col items-center text-center group animate-in fade-in slide-in-from-bottom duration-1000 delay-500">
                        {{-- Indicator --}}
                        <div class="relative mb-8">
                            <div class="w-24 h-24 rounded-3xl bg-black border-2 border-white/20 group-hover:border-primary flex items-center justify-center text-3xl font-black text-white group-hover:text-primary transition-all duration-500">
                                3
                            </div>
                        </div>
                        
                        {{-- Content --}}
                        <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-8 rounded-[2.5rem] group-hover:border-primary/30 transition-all duration-500 h-full flex flex-col">
                            <h3 class="text-xl font-bold text-white mb-4">Vérifiez vos e-mails</h3>
                            <p class="text-white/50 text-sm mb-8 leading-relaxed flex-grow">
                                Un message contenant vos accès exclusifs et les prochaines étapes vous attend.
                            </p>
                            <div class="mt-auto">
                                <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 border border-primary/20 text-primary text-[10px] font-bold rounded-lg uppercase tracking-widest">
                                    <span class="relative flex h-2 w-2">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                                    </span>
                                    Action Immédiate
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Final CTA --}}
            <div class="mt-24 text-center animate-in fade-in slide-in-from-top duration-1000 delay-700">
                <div class="inline-block p-[1px] rounded-[2rem] bg-gradient-to-r from-primary/50 via-white/20 to-primary/50 group">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfmTk9YHbUl-tWMt2TXDIYL11YH3p_qogNO0M25layR-vR34w/viewform?usp=publish-editor" target="_blank" class="relative flex items-center justify-center px-16 py-6 bg-black text-white font-black rounded-[calc(2rem-1px)] hover:bg-primary hover:text-black transition-all duration-500 active:scale-95 group-hover:shadow-[0_0_50px_rgba(0,197,128,0.3)]">
                        REJOINDRE L'ACADÉMIE MAINTENANT
                    </a>
                </div>
                <p class="mt-6 text-white/30 text-[11px] font-bold uppercase tracking-[0.4em] animate-pulse">Session limitée à 50 places</p>
            </div>

        </div>
    </div>
</section>