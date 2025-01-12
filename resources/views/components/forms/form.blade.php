@props(['space'])

@php
    $classes = 'max-w-2xl mx-auto' . ($space ?? ' space-y-6');
@endphp

<form {{ $attributes(['class' => $classes, 'method' => 'GET']) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>
