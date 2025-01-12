<x-layout>

    <div class="space-y-10">
        <section>
            <x-section-heading>Companies</x-section-heading>

            <div class="mt-6 space-y-6">
                @forelse ($companies as $company)
                    <x-card>
                        <x-company-card :company="$company" />
                    </x-card>
                @empty
                    <p class="pl-6 font-bold italic text-blue-600">
                        No companies were found!
                    </p>
                @endforelse
            </div>
        </section>
    </div>

</x-layout>
