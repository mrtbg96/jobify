@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" alt="Employer Logo" class="rounded-xl object-cover" width="{{ $width }}">
