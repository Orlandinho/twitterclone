<div class="px-8 py-6 border border-blue-400 rounded-xl mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea class="border border-blue-400 w-full rounded-xl"
                  placeholder="What's Up?"
                  required
                  name="body">

        </textarea>
        <hr class="my-4">

        <div class="flex justify-between">
            <img src="https://i.pravatar.cc/40?img={{ auth()->user()->id }}"
                 alt="avatar"
                 class="rounded-full">
            <button type="submit"
                    class="bg-blue-500 text-white hover:bg-white hover:text-blue-500 ring-1 rounded-xl ring-blue-500 shadow-sm shadow-blue-500/50 px-3">
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
