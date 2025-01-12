@props(['user'])

<div class="flex flex-col justify-between items-center space-y-6">
    <div>
        <img src="{{ Vite::asset('resources/images/avatar.webp') }}" alt="{{ $user->name }}" class="rounded-50"
            width="112">
    </div>
    <div class="font-bold text-center">
        <h2 class="text-xl group-hover:text-blue-600 transition-colors duration-300">
            {{ $user->name }}
        </h2>
        <p class="text-white/50 text-sm">
            {{ $user->email }}
        </p>
    </div>
    <div class="flex items-center space-x-4">
        <div>
            <img src="{{ asset($user->company->logo) }}" alt="{{ $user->company->name }}" class="rounded-lg"
                width="32">
        </div>
        <div>
            <p class="font-bold text-sm text-white">
                {{ $user->company->name }}
            </p>
        </div>
    </div>
</div>
