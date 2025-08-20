<x-layout>
    <x-breadcrumbs 
        :links="[
            'Profile' => route('profile.index', $user),
        ]"
        class="mb-4" 
    />

    <x-card>
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold ml-2">Profile</h1>
            <div class="flex space-x-2 mr-2">
                <x-link-button href="{{ route('profile.edit', $user) }}">Edit Profile</x-link-button>
    
                <form method="POST" action="{{ route('auth.destroy') }}">
                    @csrf
                    @method('DELETE')
                    <x-button>
                        Logout
                    </x-button>
                </form>
            </div>
        </div>
        <div class="flex gap-8">
            <div class="flex flex-col space-y-2 ml-2">
                <div class="w-[180px]">
                    <img 
                        src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('./default-avatar-user.jpg') }}" 
                        alt="Profile Picture" 
                        class="object-cover rounded-md"
                    />
                </div>
                <form method="POST" action="{{ route('avatar.update', $user) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <x-text-input type="file" name="avatar" id="avatar" />
                    <div>
                        <x-button type="submit" class="mt-2">Update Picture</x-button>
                    </div>
                </form>
            </div>
            <div class="flex flex-col space-y-4 mt-8">
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
        </div>
        

    </x-card>
</x-layout>