

<div class="px-8 py-6 border border-blue-400 rounded-xl mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea class="border border-blue-400 w-full rounded-xl"
                  placeholder="What's Up?"
                  autofocus
                  required
                  name="body">

        </textarea>
        <hr class="my-4">

        <div class="flex justify-between items-center">
            <a href="{{ route('profile', auth()->user()) }}">
                <img src="{{ auth()->user()->avatar ? auth()->user()->avatar : asset('/avatars/default.jpeg') }}"
                    alt="avatar"
                    class="rounded-full w-10">
            </a>
            <button type="submit"
                    class="bg-blue-500 text-white hover:bg-white hover:text-blue-500 ring-1 rounded-lg ring-blue-500 px-3 py-1 text-sm">
                Tweet-a-roo!
            </button>
        </div>
    </form>
    @error('body')
        <div class="mt-4">
            <p class="text-sm text-red-500">{{ $message }}</p>
        </div>
    @enderror
</div>
