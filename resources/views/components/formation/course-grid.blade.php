@php
    $courses = [
        [
            'title' => 'Fondations du Trading',
            'image' => 'images/slider1.jpg',
            'description' => 'Apprenez les bases indispensables : psychologie, gestion du risque et analyse technique fondamentale.',
            'level' => 'Débutant',
            'price' => 'Gratuit',
            'duration' => '6h'
        ],
        [
            'title' => 'Stratégies SMC Avancées',
            'image' => 'images/slider2.jpg',
            'description' => 'Maîtrisez les Smart Money Concepts : Order Blocks, Liquidity Sweeps et structures de marché institutionnelles.',
            'level' => 'Expert',
            'price' => '499€',
            'duration' => '12h'
        ],
        [
            'title' => 'Analyse ICT & Timing',
            'image' => 'images/slider3.jpg',
            'description' => 'Comprenez l\'algorithme interbancaire avec les concepts de Michael J. Huddleston : Kill Zones et Power of Three.',
            'level' => 'Intermédiaire',
            'price' => '299€',
            'duration' => '8h'
        ],
        [
            'title' => 'Mastery Scalping M1',
            'image' => 'images/slider4.jpg',
            'description' => 'Une stratégie de précision extrême pour des entrées à haut ratio risque/récompense sur les petites unités de temps.',
            'level' => 'Expert',
            'price' => '599€',
            'duration' => '10h'
        ],
        [
            'title' => 'Psychologie d\'Élite',
            'image' => 'images/slider5.jpg',
            'description' => 'Forgez-vous un mental d\'acier pour gérer les séries de pertes et rester discipliné face aux marchés.',
            'level' => 'Tous Niveaux',
            'price' => '199€',
            'duration' => '5h'
        ],
        [
            'title' => 'Trading des Indices',
            'image' => 'images/slider6.jpg',
            'description' => 'Spécialisez-vous sur le NASDAQ et le US30 avec des setups spécifiques aux indices boursiers américains.',
            'level' => 'Intermédiaire',
            'price' => '349€',
            'duration' => '7h'
        ],
    ];
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($courses as $course)
        <x-formation.course-card
            :title="$course['title']"
            :image="$course['image']"
            :description="$course['description']"
            :level="$course['level']"
            :price="$course['price']"
            :duration="$course['duration']"
        />
    @endforeach
</div>
