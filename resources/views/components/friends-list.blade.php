@props(['tweets'])

<h3 class="font-bold text-lg">Following</h3>

<ul>
    @foreach(auth()->user()->follows as $user)
        <li class="mt-4">
            <div class="flex items-center text-sm">
                <img src="https://i.pravatar.cc/40?img={{ $user->id }}"
                     alt="avatar"
                     class="rounded-full mr-4">
                {{ $user->name }}
            </div>
        </li>
    @endforeach
</ul>
