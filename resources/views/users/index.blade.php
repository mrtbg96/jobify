<x-layout>

    <div class="space-y-10">
        <section>
            <x-section-heading>Users</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @forelse ($users as $user)
                    <x-card>
                        <x-user-card :user="$user" />
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
