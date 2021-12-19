<x-layout>

    <div class="lg:flex lg:justify-between">

        <div class="lg:w-32">
            <x-sidebar-links />
        </div>

        <div class="lg:flex-1 lg:mx-10 mb-10" style="max-width: 700px;">

            <x-create :user="$user" />
        </div>

        <div class="lg:w-1/6">
            <x-friends-list :tweets="$user" />
        </div>

    </div>

</x-layout>
