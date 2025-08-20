<x-layout>
    <x-breadcrumbs 
        :links="[
            'Profile' => route('profile.index', $user),
        ]"
        class="mb-4" 
    />

    <x-card>
        <h1 class="text-2xl font-bold mb-4">Profile</h1>
        <div class="flex flex-col space-y-4 mb-6">
            <div>
                <label class="font-medium">Name: </label>{{ $user->name }}
            </div>
            <div>
                <label class="font-medium">Email: </label>{{ $user->email }}
            </div>
            <div>
                <label class="font-medium">Company Name: </label>{{ $user->employer->company_name ?? 'N/A' }}
            </div>
        </div>
        <x-link-button href="{{ route('profile.edit', $user) }}">Edit Profile</x-link-button>

    </x-card>
</x-layout>