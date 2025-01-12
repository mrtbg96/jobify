@props(['job'])

<x-card>
    <div class="flex justify-between items-center text-md font-bold">
        <div>
            <div class="text-gray-400 group-hover:text-white transition-colors duration-300">
                {{ $job->company->name }}
            </div>
        </div>
        <div>
            <span
                class="bg-white text-black text-sm rounded-lg p-1 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                {{ $job->created_at->diffForHumans() }}
            </span>
        </div>
    </div>

    <div class="py-8 font-bold">
        <h3 class="mb-1 text-lg text-center group-hover:text-blue-600 transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-center text-md mt-4">
            {{ $job->schedule }}: {{ $job->salary }}
        </p>
        <p class="text-center text-md group-hover:text-blue-600 mt-4">
            {{ $job->location }}
        </p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-2">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <a href="{{ route('companies.index') }}">
            <x-company-logo :company="$job->company" :width="48" />
        </a>
    </div>
</x-card>
