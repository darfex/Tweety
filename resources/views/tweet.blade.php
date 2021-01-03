<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img src="{{ $tweet->user->avatar }}" style="width: 50px;" alt="" class="rounded-full mr-2">
        </a>
    </div>
    <div>
        <a href="{{ $tweet->user->path() }}">
            <h5 class="font-bold mb-3">{{ $tweet->user->name}}</h5>
        </a>
        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>
    
        <div class="flex items-center">
            <x-like-button :tweet="$tweet" />
            <x-delete-button :tweet=$tweet />
        </div>
    </div>
</div>

<div class="flex justify-center">
    <img src="{{ $tweet->image }}" alt="" class="w-auto">
</div>