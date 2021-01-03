<div class="border border-gray-400 rounded-lg mb-4">
    @forelse ($tweets as $tweet)
        @include('tweet')
    @empty
        <p class="p-4">No Tweets yet</p>
    @endforelse

</div>
{{ $tweets->links() }}