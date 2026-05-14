<section class="relative overflow-hidden pt-32 -mt-28 max-sm:mt-0 pb-20 lg:pt-48 lg:pb-32 bg-black">
    {{-- Background decorative elements --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-7xl overflow-hidden pointer-events-none">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-primary/10 blur-[120px] rounded-full"></div>
        <div class="absolute top-[20%] -right-[5%] w-[30%] h-[30%] bg-white/5 blur-[100px] rounded-full"></div>
        <div class="absolute bottom-[10%] right-[10%] w-[20%] h-[20%] bg-primary/5 blur-[80px] rounded-full"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            {{-- Left Side: Content --}}
            <div class="flex flex-col space-y-8 animate-in fade-in slide-in-from-left duration-1000">
                <div>
                    <span
                        class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-semibold bg-white/5 border border-white/10 text-primary mb-6">
                        <span class="relative flex h-2 w-2 mr-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary/75 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                        Maîtrisez votre avenir financier
                    </span>
                    <h1 class="text-5xl lg:text-7xl font-bold tracking-tight text-white leading-[1.1] mb-6">
                        Tradez comme un pro avec <span
                            class="bg-gradient-to-r from-primary to-primary/60 bg-clip-text text-transparent ">MrTech</span>
                    </h1>
                    <p class="text-xl text-white/60 leading-relaxed max-w-xl">
                        Apprenez le trading avec des experts, recevez des signaux haute précision et rejoignez une
                        communauté d'élite pour propulser votre capital.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-4">
                    <a href="#"
                        class="group relative w-full sm:w-auto px-8 py-4 bg-primary text-black font-bold rounded-2xl hover:bg-white hover:text-black transition-all duration-300 overflow-hidden text-center">
                        <span class="relative z-10">Mes Formations</span>
                    </a>
                    <a href="#"
                        class="w-full sm:w-auto px-8 py-4 text-white font-semibold border border-white/20 rounded-2xl hover:bg-white/10 transition-all text-center">
                        Voir mes signaux
                    </a>
                </div>

                {{-- Trust Markers --}}
                <div class="pt-8 border-t border-white/10 flex flex-wrap items-center gap-x-8 gap-y-4">
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-white">+2,000</span>
                        <span class="text-xs text-white/40 uppercase tracking-widest font-semibold">Étudiants</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-white">85%</span>
                        <span class="text-xs text-white/40 uppercase tracking-widest font-semibold">Win Rate</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-white">4.9/5</span>
                        <span class="text-xs text-white/40 uppercase tracking-widest font-semibold">Avis Google</span>
                    </div>
                </div>
            </div>

            {{-- Right Side: Image --}}
            <div class="relative animate-in fade-in slide-in-from-right duration-1000 delay-300">

                {{-- Tech HUD Canvas Layer --}}
                <div class="absolute inset-0 z-0 flex items-center justify-center opacity-40">
                    <canvas id="techHudCanvas"
                        class="w-[80%] h-[80%] lg:w-[140%] lg:h-[140%] max-w-none pointer-events-none"></canvas>
                </div>

                {{-- Main Hero Image (Person) --}}
                <div class="relative z-20 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10"></div>
                    <img src="{{ asset('images/hero.png') }}" alt="MrTech Trading Elite"
                        class="w-full h-[90vh] object-contain rounded-[2rem]">
                </div>

                {{-- Animated Chart Terminal (anim1.gif) --}}


                {{-- Performance Badge --}}


                {{-- Decorative Elements --}}
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-primary/20 blur-[100px] rounded-full -z-10">
                </div>
            </div>
        </div>
    </div>
</section>

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
            if (dashArray.length) ctx.setLineDash(dashArray);
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

        0%,
        100% {
            transform: translateY(0) rotate(0);
        }

        50% {
            transform: translateY(-15px) rotate(2deg);
        }
    }

    .animate-float {
        animation: float 5s ease-in-out infinite;
    }
</style>