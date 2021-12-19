@props(['users'])

<div>

    @foreach($users as $user)

        <div class="mb-4">
            <a href="{{ $user->path() }}" class="flex items-center">
                <img src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar" class="w-16 mr-4 rounded-full">

                <div class="font-bold">
                    {{ '@' . $user->username }}
                </div>
            </a>
        </div>

    @endforeach
    {{ $users->links() }}
</div>
