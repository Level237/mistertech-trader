@props([
    'image' => 'images/slider1.jpg',
    'title' => 'Titre de la Formation',
    'description' => 'Description courte du cours pour donner envie d\'en savoir plus.',
    'level' => 'Débutant',
    'price' => 'Gratuit',
    'duration' => '4h'
])

<div class="group relative bg-zinc-900/50 border border-white/5 rounded-[2.5rem] overflow-hidden hover:border-primary/30 transition-all duration-500 shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)]">
    {{-- Image Container --}}
    <div class="aspect-[16/10] overflow-hidden relative">
        <img src="{{ asset($image) }}" alt="{{ $title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
        <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-transparent to-transparent opacity-60"></div>

        {{-- Level Badge --}}
        <div class="absolute top-4 left-4 px-4 py-1.5 rounded-full bg-black/40 backdrop-blur-md border border-white/10 text-[10px] font-bold uppercase tracking-widest text-white">
            {{ $level }}
        </div>
    </div>

    {{-- Content --}}
    <div class="p-8 space-y-4">
        <div class="flex justify-between items-start">
            <h3 class="text-2xl font-bold tracking-tight text-white group-hover:text-primary transition-colors">
                {{ $title }}
            </h3>
        </div>

        <p class="text-gray-400 text-sm leading-relaxed line-clamp-2">
            {{ $description }}
        </p>

        {{-- Meta Info --}}
        <div class="pt-4 flex items-center justify-between border-t border-white/5">
            <div class="flex gap-4">
                <div class="flex items-center gap-2 text-xs text-gray-500 font-mono">
                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    {{ $duration }}
                </div>
            </div>
            <div class="text-xl font-black text-primary font-mono tracking-tighter">
                {{ $price }}
            </div>
        </div>

        {{-- CTA Button (Liquid Glass Style) --}}
        <a href="#" class="mt-6 block w-full text-center py-4 rounded-2xl bg-white/5 border border-white/10 text-white font-bold text-sm uppercase tracking-widest hover:bg-primary hover:text-black hover:border-primary transition-all duration-300 shadow-[inset_0_1px_0_rgba(255,255,255,0.05)]">
            Découvrir le cours
        </a>
    </div>
</div>
