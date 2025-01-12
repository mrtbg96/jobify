<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="{{ route('register.store') }}" enctype="multipart/form-data" autocomplete="off">
        <x-forms.input label="Name" name="name" placeholder="Please enter your name" />

        <x-forms.input label="Email" name="email" type="email" placeholder="Please enter your email" />

        <x-forms.input label="Password" name="password" type="password" placeholder="Please enter your password" />

        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password"
            placeholder="Please confirm your password" />

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer" placeholder="Please enter your employer name" />

        <x-forms.input label="Employer Logo" name="logo" type="file" />

        <x-forms.button>Register</x-forms.button>
    </x-forms.form>
</x-layout>
