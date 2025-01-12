<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="{{ route('login.store') }}" autocomplete="off">
        <x-forms.input label="Email" name="email" type="email" placeholder="Please enter your email" />

        <x-forms.input label="Password" name="password" type="password" placeholder="Please enter your password" />

        <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>
