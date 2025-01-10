<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Pixel Positions') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white">

    <div class="px-12">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="/jobs">Jobs</a>
                <a href="/companies">Companies</a>
                <a href="/about">About</a>
            </div>

            <div>
                <a href="/">Post a Job</a>
            </div>
        </nav>

        <main class="mt-6 max-w-[986px]">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
