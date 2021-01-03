@unless (auth()->user()->is($user))
    <form action="{{ $user->path('follow') }}" method="POST">
        @csrf
        <button type="submit" class="bg-blue-500 rounded-full text-white shadow px-4 text-xs py-2">
            {{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}
        </button>
    </form> 
@endunless