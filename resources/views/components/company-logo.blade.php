@props(['company', 'width' => 90])

<img src="{{ asset($company->logo) }}" alt="{{ $company->name }}"
    class="rounded-xl group-hover:scale-105 transition-transform duration-300" width="{{ $width }}">
