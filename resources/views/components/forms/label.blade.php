@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2 mb-1">
    <span class="w-2 h-2 bg-blue-600 inline-block"></span>
    <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
</div>
