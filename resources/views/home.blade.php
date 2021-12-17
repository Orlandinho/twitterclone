<x-layout>

    <div class="lg:flex lg:justify-between">

        <div class="lg:w-32">
            <x-sidebar-links/>
        </div>

        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
            <x-publish-tweet />

            <div class="border border-gray-300 rounded-lg">
                <x-timeline/>
                <x-timeline/>
                <x-timeline/>
            </div>
        </div>

        <div class="lg:w-1/6 bg-gray-100 p-4">
            <x-friends-list />
        </div>

    </div>

</x-layout>
