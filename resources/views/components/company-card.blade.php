@props(['company'])

<div class="flex justify-between">
    <div class="flex space-x-6">
        <div>
            <x-company-logo :company="$company" width="96" />
        </div>
        <div class="flex flex-col justify-between">
            <h1 class="font-bold text-2xl group-hover:text-blue-600 transition-colors duration-300">
                {{ $company->name }}
            </h1>
            <p class="font-bold mt-auto text-md text-white/50 group-hover:text-white transition-colors duration-300">
                {{ $company->user->name }}
            </p>
        </div>
    </div>
    <div class="flex flex-col justify-between">
        <div class="flex justify-end">
            <span
                class="bg-white text-black text-xs font-bold rounded-lg p-1 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                {{ $company->created_at->diffForHumans() }}
            </span>
        </div>
        <div class="flex justify-end">
            <span class="font-bold text-sm">
                Posted {{ $company->jobs_count }}
                {{ Str::plural('job', $company->jobs_count) }}
            </span>
        </div>
    </div>
</div>
