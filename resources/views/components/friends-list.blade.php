@props(['tweets'])

<h3 class="font-bold text-lg mb-4">Following</h3>

<ul class="bg-blue-100 p-4 border border-gray-200 rounded-lg">
    @foreach(auth()->user()->follows as $user)
        <li>
            <a href="{{ route('profile', $user) }}" class="flex items-center mb-4 text-sm">
                <img src="https://i.pravatar.cc/40?img={{ $user->id }}"
                    alt="avatar"
                    class="rounded-full mr-4">
                {{ $user->name }}
            </a>
        </li>
    @endforeach
</ul>
