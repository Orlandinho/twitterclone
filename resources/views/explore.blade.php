<x-layout>

    <div class="lg:flex lg:justify-between">

        <div class="lg:w-32">
            <x-sidebar-links />
        </div>

        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">

            <x-explore-content :users="$users"/>

        </div>

        <div class="lg:w-1/6">
            <x-friends-list />
        </div>

    </div>

</x-layout>
