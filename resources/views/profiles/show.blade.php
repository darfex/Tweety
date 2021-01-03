<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="{{ $user->banner }}" alt="" class="max-w-full w-full rounded-lg h-auto max-h-40">
            <img 
                src="{{ $user->avatar }}" 
                alt="Avatar"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2 left-1/2 lg:w-40"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm font-semibold">{{ '@' . $user->username }}</p>
                <p class="text-sm">Joined at {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
            
        </div>

        <p class="text-sm">
            {{ $user->bio  }}
        </p>
    </header>    
    
    @include('_timeline', ['tweets' => $tweets])
</x-app>