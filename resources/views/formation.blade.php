<x-layouts.app>
    @section('title', 'Formations - MrTech Academy')

    <x-formation.hero />

    <section class="py-24 bg-black relative">
        <div class="container mx-auto px-6">
            <div class="mb-16">
                <h2 class="text-4xl md:text-5xl font-black tracking-tighter uppercase italic">
                    Nos <span class="text-primary not-italic">Cursus</span>
                </h2>
                <p class="text-gray-400 mt-4 max-w-2xl">
                    Des programmes complets conçus pour vous faire passer de novice à trader professionnel rentable.
                </p>
            </div>

            <x-formation.course-grid />
            
        </div>
    </section>
<x-signals-carousel />
</x-layouts.app>
