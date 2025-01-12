@props(['label', 'name'])

<div>
    @if ($label && $name !== 'featured')
        <x-forms.label :$name :$label />
    @endif

    <div class="mt-1">
        {{ $slot }}

        <x-forms.error :error="$errors->first($name)" />
    </div>
</div>
