<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
        Sign in to your account
    </h1>

    <x-card class="py-8 px-16 mt-4">
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf
            
            <div class="mb-8">
                <x-label :required="true" for="email">
                    E-mail
                </x-label>
                <x-text-input type="email" name="email" />
            </div>

            <div class="mb-8">
                <x-label for="password" :required="true">
                    Password
                </x-label>
                <x-text-input type="password" name="password" />
            </div>

            <div class="mb-8 flex justify-between font-medium">
                <div>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" class="rounded-sm border border-slate-400" />
                        <label for="remember">Remember me</label>
                    </div>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">
                        Forgot password?
                    </a>
                </div>
            </div>

            <x-button class="w-full bg-cyan-200">Login</x-button>    
        </form>
        <div class="mt-4 text-center font-medium">
            <div>
                <a href="{{ route('create_auth.create') }}" class="text-indigo-600 hover:underline">
                    Don't have an account?
                </a>
            </div>
        </div>
    </x-card>
</x-layout>