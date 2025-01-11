@props(['job'])

<x-card class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>

    <div class="flex flex-col flex-1">
        <a href="#" class="text-sm text-gray-400">
            {{ $job->employer->name }}
        </a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">
            {{ $job->title }}
        </h3>

        <p class="text-sm text-gray-400 mt-auto">
            {{ $job->schedule }}: {{ $job->salary }}
        </p>
    </div>

    <div class="flex flex-col justify-between">
        <div class="flex justify-end space-x-4">
            <span>Remote</span>
            <span>22h</span>
        </div>

        <div class="space-x-2">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
    </div>
</x-card>
