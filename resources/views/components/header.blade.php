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
            @else
                <li>
                    <a href="{{ route('auth.create') }}">Sign in</a>
                </li>
            @endauth
        </ul>
    </nav>