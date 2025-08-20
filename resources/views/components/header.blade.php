<nav class="mb-6 flex justify-between text-lg font-medium rounded-md border border-slate-300 bg-white p-4 shadow-sm">
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
            <li>
                <a href="{{ route('my_job.index') }}">
                    My Jobs
                </a>
            </li>
            @endauth
        </ul>
        <ul class="flex space-x-2">
            @auth
                <li>
                    <a href="{{ route('profile.index', auth()->user()) }}">
                        {{auth()->user()->name ?? 'Guest'}}
                    </a>
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