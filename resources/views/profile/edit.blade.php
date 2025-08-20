<x-layout>
     <x-breadcrumbs 
        :links="[
            'Profile' => route('profile.index'),
            'Edit Profile' => route('profile.edit', $user)
        ]"
        class="mb-4" 
    />

    <x-card class="mb-4">
        <h1 class="text-2xl font-bold mb-6">Profile</h1>
        <form action="{{ route('profile.update', $user) }}" method="POST" class="mb-2" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-4 mb-6">
                <div>
                    <x-label for="name" :required="true">Name</x-label>
                    <x-text-input name="name" type="text" :value="$user->name" />
                </div>
                <div>
                    <x-label for="email" :required="true">Email</x-label>
                    <x-text-input name="email" type="email" :value="$user->email" />
                </div>
                <div>
                    <x-label for="avatar">Avatar</x-label>
                    <x-text-input type="file" name="avatar" id="avatar" />
                </div>
            </div>
            <x-button>Save Changes</x-button>
        </form>
    </x-card>
</x-layout>