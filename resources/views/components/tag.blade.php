@props(['tag', 'size' => 'medium'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300';

    if ($size === 'medium') {
        $classes .= ' px-5 py-2 text-md';
    }

    if ($size === 'small') {
        $classes .= ' px-2 py-1 text-2xs';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">
    {{ $tag->name }}
</a>
