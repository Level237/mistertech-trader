<section class="relative min-h-screen flex items-center overflow-hidden pt-32 pb-20 lg:pt-48 lg:pb-32 bg-black">
    {{-- Advanced Background Grid & Light Leaks --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div>
        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-primary/20 blur-[120px] rounded-full opacity-50 animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-primary/10 blur-[100px] rounded-full opacity-30"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            {{-- Left Side: High-Impact Content --}}
            <div class="flex flex-col space-y-10 animate-in fade-in slide-in-from-left duration-1000">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 backdrop-blur-md">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                        <span class="text-xs font-bold tracking-widest uppercase text-primary">Live Performance: +12.4%</span>
                    </div>

                    <h1 class="text-6xl lg:text-8xl font-black tracking-tighter text-white leading-[0.95]">
                        L'Élite du <br>
                        <span class="relative inline-block">
                            <span class="relative z-10 bg-gradient-to-r from-primary via-emerald-400 to-primary bg-clip-text text-transparent">Trading</span>
                            <svg class="absolute -bottom-2 left-0 w-full h-3 text-primary/30" viewBox="0 0 100 10" preserveAspectRatio="none">
                                <path d="M0 5 Q 25 0 50 5 T 100 5" fill="none" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </span>
                    </h1>

                    <p class="text-xl text-white/50 leading-relaxed max-w-lg font-medium">
                        Rejoignez <span class="text-white">MrTech Academy</span>. Une synergie parfaite entre éducation d'élite, signaux temps-réel et une communauté de traders rentables.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-6">
                    <a href="#" class="group relative w-full sm:w-auto">
                        <div class="absolute -inset-1 bg-primary blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                        <div class="relative flex items-center justify-center px-10 py-5 bg-primary text-black font-black rounded-2xl transition-transform active:scale-95">
                            DÉCOLLER MAINTENANT
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7h8m0 0v8m0-8l-8 8" />
                            </svg>
                        </div>
                    </a>
                    
                    <a href="#" class="group flex items-center gap-3 text-white font-bold hover:text-primary transition-colors">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full border border-white/10 group-hover:border-primary/50 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        Voir le concept
                    </a>
                </div>

                {{-- Metrics --}}
                <div class="grid grid-cols-3 gap-8 pt-10 border-t border-white/5">
                    <div class="space-y-1">
                        <div class="text-3xl font-black text-white italic">2K+</div>
                        <div class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em]">Membres Alpha</div>
                    </div>
                    <div class="space-y-1">
                        <div class="text-3xl font-black text-white italic">88%</div>
                        <div class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em]">Précision Signaux</div>
                    </div>
                    <div class="space-y-1">
                        <div class="text-3xl font-black text-white italic">4.9</div>
                        <div class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em]">Note Trustpilot</div>
                    </div>
                </div>
            </div>

            {{-- Right Side: Dynamic Composition --}}
            <div class="relative animate-in fade-in slide-in-from-right duration-1000 delay-300">
                
                {{-- Tech HUD Canvas Layer --}}
                <div class="absolute inset-0 z-0 flex items-center justify-center opacity-40">
                    <canvas id="techHudCanvas" class="w-[140%] h-[140%] lg:w-[160%] lg:h-[160%] max-w-none pointer-events-none"></canvas>
                </div>

                {{-- Main Hero Image (Person) --}}
                <div class="relative z-20 transform hover:scale-[1.02] transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10"></div>
                    <img 
                        src="{{ asset('images/hero.png') }}" 
                        alt="MrTech Trading Elite" 
                        class="w-full h-auto object-cover rounded-[2rem]"
                    >
                </div>

                {{-- Animated Chart Terminal (anim1.gif) --}}
                <div class="absolute -top-12 -left-12 z-30 w-48 md:w-64 aspect-[4/3] rounded-2xl border border-white/10 bg-black/40 backdrop-blur-xl p-3 shadow-2xl animate-bounce-slow">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex gap-1">
                            <div class="w-2 h-2 rounded-full bg-red-500/50"></div>
                            <div class="w-2 h-2 rounded-full bg-yellow-500/50"></div>
                            <div class="w-2 h-2 rounded-full bg-primary/50"></div>
                        </div>
                        <span class="text-[8px] font-mono text-white/40 tracking-tighter uppercase">Market Live Feed</span>
                    </div>
                    <div class="relative w-full h-[calc(100%-1.5rem)] rounded-lg overflow-hidden border border-white/5">
                        <img src="{{ asset('images/anim1.gif') }}" alt="Live Chart" class="w-full h-full object-cover opacity-80 mix-blend-screen">
                    </div>
                </div>

                {{-- Performance Badge --}}
                <div class="absolute bottom-10 -right-4 z-30 bg-primary p-5 rounded-3xl shadow-[0_20px_50px_rgba(0,197,128,0.3)] animate-float">
                    <div class="flex items-center gap-4 text-black">
                        <div class="w-12 h-12 bg-black flex items-center justify-center rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-black leading-none">+$4,290</div>
                            <div class="text-[10px] font-black uppercase tracking-widest opacity-60">Profit du jour</div>
                        </div>
                    </div>
                </div>

                {{-- Decorative Elements --}}
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-primary/20 blur-[100px] rounded-full -z-10"></div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const canvas = document.getElementById('techHudCanvas');
            const ctx = canvas.getContext('2d');
            let w, h, centerX, centerY;

            function resize() {
                const parent = canvas.parentElement;
                w = canvas.width = parent.offsetWidth * 2;
                h = canvas.height = parent.offsetHeight * 2;
                centerX = w / 2;
                centerY = h / 2;
            }

            window.addEventListener('resize', resize);
            resize();

            const primaryColor = '#00C580';
            let rotation = 0;

            function drawCircle(radius, dashArray = [], width = 1, opacity = 0.2, rot = 0) {
                ctx.save();
                ctx.translate(centerX, centerY);
                ctx.rotate(rot);
                ctx.beginPath();
                ctx.arc(0, 0, radius, 0, Math.PI * 2);
                ctx.strokeStyle = primaryColor;
                ctx.lineWidth = width;
                ctx.globalAlpha = opacity;
                if(dashArray.length) ctx.setLineDash(dashArray);
                ctx.stroke();
                ctx.restore();
            }

            function drawSegment(radius, startAngle, endAngle, width = 2, opacity = 0.5, rot = 0) {
                ctx.save();
                ctx.translate(centerX, centerY);
                ctx.rotate(rot);
                ctx.beginPath();
                ctx.arc(0, 0, radius, startAngle, endAngle);
                ctx.strokeStyle = primaryColor;
                ctx.lineWidth = width;
                ctx.globalAlpha = opacity;
                ctx.stroke();
                ctx.restore();
            }

            function animate() {
                ctx.clearRect(0, 0, w, h);
                rotation += 0.002;

                // Rings
                drawCircle(w * 0.20, [5, 15], 2, 0.1, -rotation);
                drawCircle(w * 0.30, [], 1, 0.05);
                drawCircle(w * 0.40, [2, 10], 1, 0.1, rotation * 0.5);
                drawCircle(w * 0.48, [40, 20], 3, 0.15, rotation * 0.2);

                // Segments
                drawSegment(w * 0.33, 0, Math.PI * 0.3, 4, 0.3, rotation * 2);
                drawSegment(w * 0.33, Math.PI, Math.PI * 1.3, 4, 0.3, rotation * 2);
                
                drawSegment(w * 0.45, Math.PI * 0.5, Math.PI * 0.7, 2, 0.2, -rotation * 1.5);
                drawSegment(w * 0.45, Math.PI * 1.5, Math.PI * 1.7, 2, 0.2, -rotation * 1.5);

                // Scanning line
                drawSegment(w * 0.52, 0, Math.PI * 0.1, 1, 0.4, rotation * 4);

                requestAnimationFrame(animate);
            }

            animate();
        });
    </script>
</section>

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0); }
        50% { transform: translateY(-15px) rotate(2deg); }
    }
    .animate-float {
        animation: float 5s ease-in-out infinite;
    }
</style>