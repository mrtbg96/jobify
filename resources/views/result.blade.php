<x-layout>

    <div class="space-y-10">

        <section>
            <x-section-heading>Result</x-section-heading>

            <div class="mt-6 space-y-6">
                @forelse ($jobs as $job)
                    <x-job-card-large :$job />
                @empty
                    <p class="mt-6 font-bold text-sm">
                        No jobs were found!
                    </p>
                @endforelse
            </div>
        </section>
    </div>

</x-layout>
