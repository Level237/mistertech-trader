<div x-data="{ 
        show: false,
        init() {
            // Check if modal was already shown in this session (optional, but good for UX)
            if (!sessionStorage.getItem('promo_modal_shown')) {
                setTimeout(() => {
                    this.show = true;
                    sessionStorage.setItem('promo_modal_shown', 'true');
                }, 5000); // 5 seconds delay
            }
        }
    }" x-show="show" x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95" class="fixed inset-0 z-[150] flex items-center justify-center p-4"
    style="display: none;">
    {{-- Backdrop --}}
    <div class="fixed inset-0 bg-black/80 backdrop-blur-md" @click="show = false"></div>

    {{-- Modal Content --}}
    <div
        class="relative w-full max-w-4xl bg-[#111] border border-white/10 rounded-[2.5rem] overflow-hidden shadow-[0_0_100px_rgba(0,197,128,0.15)] flex flex-col md:flex-row animate-in fade-in zoom-in duration-700">

        {{-- Close Button --}}
        <button @click="show = false"
            class="absolute top-6 right-6 z-[160] p-2 bg-black/40 hover:bg-white/10 rounded-full border border-white/10 text-white/50 hover:text-white transition-all hover:rotate-90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        {{-- Left: Image Side --}}
        <div class="w-full md:w-[45%] relative min-h-[300px] max-sm:min-h-[190px] md:min-h-full">
            <img src="{{ asset('images/modal-formation.jpg') }}" alt="Formation Trading"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent to-[#111] hidden md:block"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#111] to-transparent md:hidden"></div>
        </div>

        {{-- Right: Text Side --}}
        <div class="w-full md:w-[55%] p-8 lg:p-12 flex flex-col justify-center space-y-8 relative z-10">
            <div class="space-y-4">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-primary">Offre
                        Exceptionnelle</span>
                </div>
                <h2 class="text-3xl lg:text-5xl font-black tracking-tighter text-white leading-[1.1]">
                    Lancez-vous dans le <br>
                    <span class="text-primary italic">Trading Rentable</span>
                </h2>
                <p class="text-white/50 text-lg font-medium leading-relaxed">
                    Ne laissez pas passer cette opportunité. Accédez à une formation d'élite et rejoignez notre
                    communauté de gagnants.
                </p>
            </div>

            <div class="flex flex-col gap-4">
                <a href="#"
                    class="group relative flex items-center justify-center px-8 py-5 bg-primary text-black font-black rounded-2xl transition-all duration-300 hover:scale-[1.02] active:scale-95 shadow-[0_10px_30px_rgba(0,197,128,0.3)]">
                    <span class="relative max-sm:text-sm z-10">SUIVRE LA FORMATION</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 ml-3 group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M13 7h8m0 0v8m0-8l-8 8" />
                    </svg>
                </a>

                <a href="https://t.me/MrtechTrading" target="_blank"
                    class="flex items-center max-sm:text-sm justify-center px-8 py-5 bg-white/5 border border-white/10 text-white font-bold rounded-2xl backdrop-blur-xl hover:bg-white/10 hover:border-primary/50 transition-all duration-300 gap-3 active:scale-95">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="text-[#24A1DE]">
                        <path d="M21.5 3L2 11L9.17 14.5L21.5 3Z" fill="currentColor" />
                        <path d="M9.17 14.5L12.5 21L21.5 3L9.17 14.5Z" fill="currentColor" />
                        <path d="M9.17 14.5L11.5 16.5L12.5 21L9.17 14.5Z" fill="currentColor" opacity="0.8" />
                        <path d="M9.17 14.5L11.5 16.5L11.5 19L9.17 14.5Z" fill="currentColor" opacity="0.6" />
                    </svg>
                    REJOINDRE MON CANAL
                </a>
            </div>


        </div>
    </div>
</div>