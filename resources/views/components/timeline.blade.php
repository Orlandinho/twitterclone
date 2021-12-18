@props(['tweets'])

@foreach($tweets as $tweet)
    <div class="flex p-4 border border-b border-gray-200">
        <div class="mr-2 flex-shrink-0">
            <a href="{{ route('profile', $tweet->user) }}">
                <img src="https://i.pravatar.cc/50?img={{ $tweet->user_id }}"
                    alt="avatar"
                    class="rounded-full mr-4">
            </a>
        </div>
        <div>
            <a href="{{ route('profile', $tweet->user) }}">
                <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
            </a>
            <p class="text-sm">{{ $tweet->body }}</p>
        </div>
    </div>
@endforeach

