@php
    $classes =
        'p-4 bg-white/5 rounded-xl gap-6 border border-transparent hover:border-blue-800 group transition-colors duration-500';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
