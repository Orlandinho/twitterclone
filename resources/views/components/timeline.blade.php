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

            <p class="text-sm">
                {{ $tweet->body }}
            </p>


            <div class="flex items-center">

                <form action="/tweets/{{ $tweet->id }}/like" method="POST">
                    @csrf
                    <div class="flex mt-3 items-center {{ $tweet->isLikedBy(auth()->user()) ? 'text-blue-400' : 'text-gray-400' }}">
                        <button type="submit" class="w-6 fill-current">
                            <i class="fas fa-thumbs-up"></i>
                        </button>
                        <span class="text-sm">
                            {{ $tweet->likes ?: 0 }}
                        </span>
                    </div>
                </form>

                <form action="/tweets/{{ $tweet->id }}/like" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="flex mt-3 ml-8 items-center {{ $tweet->isDislikedBy(auth()->user()) ? 'text-red-400' : 'text-gray-400' }}">
                        <button type="submit" class="w-6 fill-current">
                            <i class="fas fa-thumbs-down"></i>
                        </button>
                    <span class="text-sm">
                        {{ $tweet->dislikes ?: 0 }}
                    </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@empty
    <p class="p-4">No tweets yet</p>
@endforelse

