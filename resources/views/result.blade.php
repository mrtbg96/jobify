<x-layout>

    <div class="space-y-10">

        <section>
            <x-section-heading>
                {{ Str::plural('Result', $count) }}
                for: <span class="italic text-blue-600">{{ $result }}</span>
            </x-section-heading>

            <div class="mt-6 space-y-6">
                @forelse ($jobs as $job)
                    <x-job-card-large :$job :featured="$job->featured" />
                @empty
                    <p class="mt-6 pl-6 font-bold text-md italic">
                        No jobs were found!
                    </p>
                @endforelse
            </div>
        </section>
    </div>

</x-layout>
