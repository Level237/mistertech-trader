@props([
    'image' => 'images/signaux/signaux1.webp',
    'pair' => 'EUR/USD',
    'type' => 'BUY',
    'status' => 'Gagné',
    'date' => 'Aujourd\'hui',
    'rr' => '1:3'
])

<div class="group relative bg-zinc-900/50 border border-white/5 rounded-[2.5rem] overflow-hidden hover:border-primary/30 transition-all duration-500 shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)]">
    {{-- Image Container --}}
    <div class="aspect-video overflow-hidden relative">
        <img src="{{ asset($image) }}" alt="{{ $pair }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
        <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-transparent to-transparent opacity-60"></div>

        {{-- Pair Badge --}}
        <div class="absolute top-4 left-4 px-4 py-1.5 rounded-full bg-black/40 backdrop-blur-md border border-white/10 text-[10px] font-bold uppercase tracking-widest text-white">
            {{ $pair }}
        </div>

        {{-- Status Badge --}}
        <div class="absolute top-4 right-4 px-4 py-1.5 rounded-full {{ $status === 'Gagné' ? 'bg-primary/20 text-primary' : 'bg-red-500/20 text-red-500' }} backdrop-blur-md border border-current/20 text-[10px] font-bold uppercase tracking-widest">
            {{ $status }}
        </div>
    </div>

    {{-- Content --}}
    <div class="p-8 space-y-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-2 h-2 rounded-full {{ $type === 'BUY' ? 'bg-primary shadow-[0_0_8px_rgba(0,197,128,0.5)]' : 'bg-red-500 shadow-[0_0_8px_rgba(239,68,68,0.5)]' }}"></div>
                <span class="text-sm font-black tracking-widest uppercase {{ $type === 'BUY' ? 'text-primary' : 'text-red-500' }}">{{ $type }}</span>
            </div>
            <span class="text-xs text-gray-500 font-mono">{{ $date }}</span>
        </div>

        <div class="flex items-center justify-between border-t border-white/5 pt-4">
            <div class="text-gray-400 text-xs font-bold uppercase tracking-widest">Ratio R/R</div>
            <div class="text-xl font-black text-white font-mono tracking-tighter">{{ $rr }}</div>
        </div>

        {{-- CTA Button (Liquid Glass Style) --}}
        <a href="#" class="mt-6 block w-full text-center py-4 rounded-2xl bg-white/5 border border-white/10 text-white font-bold text-sm uppercase tracking-widest hover:bg-primary hover:text-black hover:border-primary transition-all duration-300 shadow-[inset_0_1px_0_rgba(255,255,255,0.05)]">
            Voir l'analyse
        </a>
    </div>
</div>
