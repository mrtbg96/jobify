@props(['job'])

<x-card class="flex gap-x-6">
    <div>
        <a href="{{ route('companies.index') }}">
            <x-company-logo :company="$job->company" />
        </a>
    </div>

    <div class="flex flex-col flex-1">
        <div class="text-md text-gray-400 group-hover:text-white transition-colors duration-300">
            {{ $job->company->name }}
        </div>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="text-md text-gray-400 mt-auto">
            {{ $job->schedule }}: {{ $job->salary }}
        </p>
    </div>

    <div class="flex flex-col justify-between">
        <div class="flex justify-end items-center space-x-4 font-bold">
            <span class="text-md group-hover:text-blue-600 transition-colors duration-300">
                {{ $job->location }}
            </span>
            <span
                class="bg-white text-black text-xs rounded-lg p-1 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                {{ $job->created_at->diffForHumans() }}
            </span>
        </div>

        <div class="space-x-2 flex justify-end">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
    </div>
</x-card>
