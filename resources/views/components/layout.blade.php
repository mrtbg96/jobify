<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/logo.svg') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-16">

    <div class="px-12">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="{{ route('jobs.index') }}" @if (request()->is('jobs')) class="text-blue-600" @endif>
                    Jobs
                </a>
                <a href="{{ route('companies.index') }}" @if (request()->is('companies')) class="text-blue-600" @endif>
                    Companies
                </a>
                <a href="{{ route('users.index') }}" @if (request()->is('users')) class="text-blue-600" @endif>
                    Users
                </a>
            </div>

            <div>
                @auth()
                    <div class="flex items-center space-x-4 font-bold">
                        <a href="{{ route('jobs.create') }}"
                            class="bg-white text-black rounded-lg border border-white hover:bg-white/85 hover:border-white/85 hover:text-black p-2 transition-colors duration-300">
                            Post a Job
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                class="bg-blue-600 rounded-lg border border-blue-800 hover:bg-blue-700 p-2 transition-colors duration-300">
                                Log Out
                            </button>
                        </form>
                    </div>
                @endauth

                @guest()
                    <div class="space-x-4 font-bold">
                        <a href="{{ route('register.create') }}"
                            class="bg-blue-600 rounded-lg border border-blue-800 hover:bg-blue-700 p-2 transition-colors duration-300">
                            Register
                        </a>
                        <a href="{{ route('login.create') }}"
                            class="bg-white text-black rounded-lg border border-white hover:bg-white/85 hover:border-white/85 hover:text-black p-2 transition-colors duration-300">
                            Log In
                        </a>
                    </div>
                @endguest
            </div>
        </nav>

        <main class="mt-6 mx-auto max-w-[986px]">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
