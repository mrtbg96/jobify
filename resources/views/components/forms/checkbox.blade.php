@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name),
    ];
@endphp

<x-forms.field :$label :$name>
    <div>
        <input {{ $attributes($defaults) }}>
        <span class="pl-1">{{ $label }}</span>
    </div>
</x-forms.field>
