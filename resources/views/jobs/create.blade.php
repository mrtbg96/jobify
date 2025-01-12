<x-layout>
    <x-page-heading>Post a Job</x-page-heading>

    <x-forms.form method="POST" action="{{ route('jobs.store') }}" autocomplete="off">
        <x-forms.input label="Title" name="title" placeholder="Backend Developer" />

        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD" />

        <x-forms.input label="Location" name="location" placeholder="Los Angeles" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="">Select a schedule</option>
            <option value="Full-time" @if (old('schedule') == 'Full-time') selected @endif>
                Full-time
            </option>
            <option value="Part-time" @if (old('schedule') == 'Part-time') selected @endif>
                Part-time
            </option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com" />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="frontend, backend, laravel" />

        <x-forms.checkbox label="Is Featured?" name="featured" />

        <x-forms.button>Post Job</x-forms.button>
    </x-forms.form>
</x-layout>
