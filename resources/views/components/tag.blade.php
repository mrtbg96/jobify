@props(['tag', 'size' => 'medium', 'section' => false])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300';

    if ($size === 'medium') {
        $classes .= ' px-5 py-2 text-md';
    }

    if ($size === 'small') {
        $classes .= ' px-2 py-1 text-sm';
    }

    if ($section) {
        $classes .= ' mb-2';
    }
@endphp

<a href="{{ route('tags', strtolower($tag->name)) }}" class="{{ $classes }}">
    {{ $tag->name }}
</a>
