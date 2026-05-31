@php
    $signals = [
        ['pair' => 'EUR/USD', 'type' => 'BUY', 'status' => 'Gagné', 'rr' => '1:4', 'image' => 'images/signaux/signaux1.webp', 'date' => '31 Mai 2026'],
        ['pair' => 'NAS100', 'type' => 'SELL', 'status' => 'Gagné', 'rr' => '1:5', 'image' => 'images/signaux/signaux2.webp', 'date' => '30 Mai 2026'],
        ['pair' => 'GBP/JPY', 'type' => 'BUY', 'status' => 'Perdu', 'rr' => '1:3', 'image' => 'images/signaux/signaux3.webp', 'date' => '29 Mai 2026'],
        ['pair' => 'GOLD', 'type' => 'BUY', 'status' => 'Gagné', 'rr' => '1:6', 'image' => 'images/signaux/signaux4.webp', 'date' => '28 Mai 2026'],
        ['pair' => 'BTC/USD', 'type' => 'SELL', 'status' => 'Gagné', 'rr' => '1:3', 'image' => 'images/signaux/signaux5.webp', 'date' => '27 Mai 2026'],
        ['pair' => 'USD/CAD', 'type' => 'BUY', 'status' => 'Gagné', 'rr' => '1:4', 'image' => 'images/signaux/signaux6.webp', 'date' => '26 Mai 2026'],
        ['pair' => 'AUD/USD', 'type' => 'SELL', 'status' => 'Perdu', 'rr' => '1:3', 'image' => 'images/signaux/signaux7.webp', 'date' => '25 Mai 2026'],
        ['pair' => 'US30', 'type' => 'BUY', 'status' => 'Gagné', 'rr' => '1:8', 'image' => 'images/signaux/signaux8.webp', 'date' => '24 Mai 2026'],
        ['pair' => 'EUR/JPY', 'type' => 'SELL', 'status' => 'Gagné', 'rr' => '1:4', 'image' => 'images/signaux/signaux9.webp', 'date' => '23 Mai 2026'],
        ['pair' => 'SOL/USD', 'type' => 'BUY', 'status' => 'Gagné', 'rr' => '1:5', 'image' => 'images/signaux/signaux10.webp', 'date' => '22 Mai 2026'],
        ['pair' => 'GBP/USD', 'type' => 'SELL', 'status' => 'Gagné', 'rr' => '1:4', 'image' => 'images/signaux/signaux11.webp', 'date' => '21 Mai 2026'],
        ['pair' => 'XAU/USD', 'type' => 'BUY', 'status' => 'Gagné', 'rr' => '1:10', 'image' => 'images/signaux/signaux12.webp', 'date' => '20 Mai 2026'],
    ];
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    @foreach($signals as $signal)
        <x-signals.signal-card
            :pair="$signal['pair']"
            :type="$signal['type']"
            :status="$signal['status']"
            :rr="$signal['rr']"
            :image="$signal['image']"
            :date="$signal['date']"
        />
    @endforeach
</div>
