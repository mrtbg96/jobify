@props(['company', 'width' => 90])

<img src="{{ asset($company->logo) }}" alt="Company Logo" class="rounded-xl" width="{{ $width }}">
