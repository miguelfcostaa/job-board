<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Job Board</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="mx-auto mt-10 max-w-2xl bg-gradient-to-r from-cyan-100 from-20% to-blue-100 to-80% text-slate-700">
    <nav class="mb-4 flex justify-between text-lg font-medium">
        <ul class="flex space-x-8">
            <li>
                <a href="{{ route('jobs.index') }}">Home</a>
            </li>
            @auth
            <li>
                <a href="{{ route('my-job-applications.index') }}">
                    My Applications
                </a>
            </li>
            @endauth
        </ul>
        <ul class="flex space-x-2">
            @auth
                <li>
                    {{auth()->user()->name ?? 'Guest'}}
                </li>
                <li>
                    <form method="POST" action="{{ route('auth.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </button>

                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('auth.create') }}">Sign in</a>
                </li>
            @endauth
        </ul>
    </nav>

    @if(session('success'))
        <div role="alert" class="my-8 rounded-md border-l-4 shadow border-green-300 bg-green-100 p-4 text-green-700 opacity-75">
            <p class="font-bold">Success!</p>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @if(session('error'))
        <div role="alert" class="my-8 rounded-md border-l-4 shadow border-red-300 bg-red-100 p-4 text-red-700 opacity-75">
            <p class="font-bold">Error!</p>
            <p>{{ session('error') }}</p>
        </div>
    @endif

    {{ $slot }}
</body>

</html>