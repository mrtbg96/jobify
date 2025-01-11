<x-layout>

    <div class="space-y-10">
        <section>
            <div class="flex flex-col items-center py-6">
                <h1 class="mb-6 font-bold text-4xl text-white text-center">
                    Let's Find Your Next Job
                </h1>

                <form action="#" method="POST" autocomplete="off" class="w-1/2 flex flex-col items-center">
                    @csrf

                    <input type="text" name="search" id="search" placeholder="Software Engineer..."
                        class="bg-white/5 border border-white/10 w-full p-4 rounded-xl focus:outline-none focus:border-blue-600"
                        required>
                </form>
            </div>
        </section>

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 flex space-x-2">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-large :$job />
                @endforeach
            </div>
        </section>
    </div>

</x-layout>
