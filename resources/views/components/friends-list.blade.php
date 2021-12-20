
<h3 class="font-bold text-lg mb-4">Following</h3>

<ul class="bg-blue-100 p-4 border border-gray-200 rounded-lg">
    @forelse(auth()->user()->follows as $user)
        <li class="{{ $loop->last ? '' : 'mb-4' }}">
            <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                <img src="{{ $user->avatar ? $user->avatar : asset('/avatars/default.jpeg') }}"
                    alt="avatar"
                    class="rounded-full mr-4 w-14">
                {{ $user->name }}
            </a>
        </li>
    @empty
        <li class="p-4">Not following anyone</li>
    @endforelse
</ul>
