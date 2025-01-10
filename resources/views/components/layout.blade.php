<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Pixel Positions') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white font-hanken-grotesk">

    <div class="px-12">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="/jobs">Jobs</a>
                <a href="/career">Career</a>
                <a href="/salaries">Salaries</a>
                <a href="/companies">Companies</a>
            </div>

            <div>
                <a href="/">Post a Job</a>
            </div>
        </nav>

        <main class="mt-6 mx-auto max-w-[986px]">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
