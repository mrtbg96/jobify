@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full outline-none focus:border-blue-600',
        'value' => old($name),
    ];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>
