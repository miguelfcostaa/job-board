<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
        Create an account
    </h1>
    <x-card class="py-8 px-16 mt-4">
        <form action="{{ route('create_auth.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <x-label :required="true" for="name">
                    Name
                </x-label>
                <x-text-input type="text" name="name" placeholder="Your Name" />
            </div>

            <div class="mb-4">
                <x-label :required="true" for="email">
                    E-mail
                </x-label>
                <x-text-input type="email" name="email" placeholder="email@example.com" />
            </div>

            <div class="mb-4">
                <x-label for="password" :required="true">
                    Password
                </x-label>
                <x-text-input type="password" name="password" placeholder="Password" />
            </div>

            <div class="mb-12">
                <x-label for="password_confirmation" :required="true">
                    Confirm Password
                </x-label>
                <x-text-input type="password" name="password_confirmation" placeholder="Confirm Password" />
            </div>

            <x-button class="w-full bg-cyan-200">Create an account</x-button>
            <div class="mt-4 text-center font-medium">
                <div>
                    Already have an account? 
                    <a href="{{ route('auth.create') }}" class="text-indigo-600 hover:underline">
                        Login
                    </a>
                </div>
            </div>
        </form>
    </x-card>
</x-layout>