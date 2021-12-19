@props(['user'])

<form action="{{ route('follow', $user->username) }}" method="POST">
    @csrf
    <button type="submit"
            {{ $attributes(['class' => 'btn']) }}>
        {{ $slot }}
    </button>
</form>
