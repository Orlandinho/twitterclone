@props(['user'])

    <div class="flex p-4 border border-b border-gray-200 rounded-xl mb-6">
        <header class="relative">
            <img src="{{ asset('images/default-profile-banner.jpg') }}" alt="banner">

            <div class="flex justify-between items-center mb-6">

                <div>
                    <h2 class="font-bold mb-2 text-2xl">{{ $user->name }}</h2>
                    <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
                </div>

                <div>
                    <a href="#"
                       class="bg-white text-xs text-blue-500 hover:bg-blue-500 hover:text-white ring-1 rounded-xl ring-blue-500 mr-2 px-3 py-1">
                        Edit Profile
                    </a>

                    <a href="#"
                       class="bg-blue-500 text-xs text-white hover:bg-white hover:text-blue-500 ring-1 rounded-xl ring-blue-500 px-3 py-1">
                        Follow Me
                    </a>
                </div>

            </div>

            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, minus nulla. Ab accusantium aperiam atque blanditiis dignissimos dolorum et laborum nobis perferendis, possimus quas sapiente suscipit ullam? Consectetur, debitis, et!</p>

            <img src="https://i.pravatar.cc/150?img={{ $user->id }}" alt="banner" class="rounded-full" style="position:absolute; left: calc(50% - 75px); top: 138px;">
        </header>
    </div>

