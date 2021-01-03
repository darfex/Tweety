{{-- User anchor tag instead of form --}}

<div class="flex">
    <form action="/tweets/{{ $tweet->id }}/like" method="POST">
        @csrf
        <div class="flex items-center mr-4 {{ $tweet->isLikedBy(auth()->user()) ? 'text-red-600' : 'text-gray-500' }}">
            <button type="submit">
                <svg viewBox="0 0 20 20" class="w-4 mr-1">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g class="fill-current">
                            <path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"></path>
                        </g>
                    </g>
                </svg>
            </button>
            <span class="text-sm">{{ $tweet->likes ?: 0 }}</span>
        </div>
    </form>
</div>