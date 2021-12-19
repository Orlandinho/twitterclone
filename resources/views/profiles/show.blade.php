<x-layout>

    <div class="lg:flex lg:justify-between">

        <div class="lg:w-32">
            <x-sidebar-links/>
        </div>

        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">

            <x-profile :user="$user"/>

            <div class="border border-gray-300 mb-4 rounded-lg">

                <x-timeline :tweets="$tweets"/>

            </div>
        </div>

        <div class="lg:w-1/6">
            <x-friends-list :tweets="$tweets"/>
        </div>

    </div>

</x-layout>
