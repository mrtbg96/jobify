<x-layout>
    <div class="flex justify-center itens-center py-16">
        <div class="flex flex-col justify-center py-16">
            <h1 class="font-bold text-8xl text-center text-blue-600 mt-12 mb-2">
                404
            </h1>
            <h2 class="font-bold text-4xl text-center text-white mb-12">
                Not Found
            </h2>
            <a href="{{ route('home') }}"
                class="rounded-lg p-2 bg-blue-600 hover:bg-blue-700 font-bold text-center transition-colors duration-300">
                Go Home
            </a>
        </div>
    </div>
</x-layout>
