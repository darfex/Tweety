<div class="lg:w-1/6 bg-blue-50 border border-blue-200 rounded-lg p-4 h-1/6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse (auth()->user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4' }} text-sm">
                <div>
                    <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                        <img src="/images/default-avatar.jpeg" style="width: 40px;" alt="" class="rounded-full mr-2">
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li class="text-sm">No friends yet!</li>
        @endforelse
    </ul>
</div>