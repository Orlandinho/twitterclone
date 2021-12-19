@props(['tweets'])

@forelse($tweets as $tweet)
    <div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }} ">
        <div class="mr-2 flex-shrink-0">
            <a href="{{ route('profile', $tweet->user) }}">
                <img src="{{ $tweet->user->avatar ? $tweet->user->avatar : 'avatars/default.jpeg' }}"
                    alt="avatar"
                    class="rounded-full mr-4 w-14">
            </a>
        </div>
        <div>
            <a href="{{ route('profile', $tweet->user) }}">
                <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
            </a>
            <p class="text-sm">{{ $tweet->body }}</p>
        </div>
    </div>
@empty
    <p class="p-4">No tweets yet</p>
@endforelse

