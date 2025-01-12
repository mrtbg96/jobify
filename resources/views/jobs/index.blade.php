<x-layout>

    <div class="space-y-10">
        <section>
            <div class="flex flex-col items-center py-6">
                <h1 class="mb-6 font-bold text-4xl text-white text-center">
                    Let's Find Your Next Job
                </h1>

                <x-forms.form action="{{ route('search') }}" autocomplete="off" class="w-full">
                    <x-forms.input :label="false" name="search"
                        placeholder="Web Developer, San Fransisco, Full-time..." />
                </x-forms.form>
            </div>
        </section>

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @forelse ($featuredJobs as $job)
                    <x-job-card :$job />
                @empty
                    <p class="pl-6 font-bold italic text-blue-600">
                        No featured jobs were found!
                    </p>
                @endforelse
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="flex flex-wrap mt-6 space-x-2">
                @forelse ($tags as $tag)
                    <x-tag :$tag section="true" />
                @empty
                    <p class="pl-6 font-bold italic text-blue-600">
                        No tags were found!
                    </p>
                @endforelse
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @forelse ($jobs as $job)
                    <x-job-card-large :$job />
                @empty
                    <p class="pl-6 font-bold italic text-blue-600">
                        No recent jobs were found!
                    </p>
                @endforelse
            </div>
        </section>
    </div>

</x-layout>
