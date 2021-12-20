@props(['user'])

    <div class="flex p-4 border border-b border-gray-200 rounded-xl mb-6">
        <header>
            <div class="relative">
                <img src="{{ asset('images/default-profile-banner.jpg') }}" alt="banner">

                <img src="{{ $user->avatar ? $user->avatar : 'avatars/default.jpeg' }}" alt="avatar" class="rounded-full absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2 w-28">
            </div>

            <div class="flex justify-between items-center mb-6">

                <div style="max-width: 270px;">
                    <h2 class="font-bold my-2 text-2xl">{{ $user->name }}</h2>
                    <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
                </div>

                <div class="flex">
                    @can('edit', $user)
                        <a href="{{ $user->path('edit') }}"
                           class="bg-white text-xs text-blue-500 hover:bg-blue-500 hover:text-white ring-1 rounded-xl ring-blue-500 mr-2 px-3 py-1">
                            Edit Profile
                        </a>
                    @endcan

                        @unless (auth()->user()->is($user))
                        <x-form.submit-button :user="$user"
                                              class="{{ auth()->user()->following($user) ? 'btn-red' : 'btn-primary' }}">{{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}</x-form.submit-button>
                        @endunless
                </div>

            </div>

            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, minus nulla. Ab accusantium aperiam atque blanditiis dignissimos dolorum et laborum nobis perferendis, possimus quas sapiente suscipit ullam? Consectetur, debitis, et!</p>

        </header>
    </div>

