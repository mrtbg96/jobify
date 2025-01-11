@props(['job'])

<x-card>
    <div class="text-sm">
        {{ $job->employer->name }}
    </div>

    <div class="py-8">
        <h3 class="mb-1 text-center font-bold group-hover:text-blue-600 transition-colors duration-300">
            {{ $job->title }}
        </h3>
        <p class="text-center text-sm mt-4">
            {{ $job->schedule }}: {{ $job->salary }}
        </p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-2">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-employer-logo :width="42" />
    </div>
</x-card>
