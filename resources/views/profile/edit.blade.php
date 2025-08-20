<x-layout>
     <x-breadcrumbs 
        :links="[
            'Profile' => route('profile.index'),
            'Edit Profile' => route('profile.edit', $user)
        ]"
        class="mb-4" 
    />

    <x-card>
        <h1 class="text-2xl font-bold mb-6">Profile</h1>
        <form action="{{ route('profile.update', $user) }}" method="POST" class="mb-2">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <x-label for="name" :required="true">Name</x-label>
                <x-text-input name="name" type="text" :value="$user->name" />
            </div>
            <div class="mb-6">
                <x-label for="email" :required="true">Email</x-label>
                <x-text-input name="email" type="email" :value="$user->email" />
            </div>
            <x-button>Save Changes</x-button>
        </form>
    </x-card>
</x-layout>