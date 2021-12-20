@props(['user'])

<div>
    <form action="{{ $user->path() }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <x-form.input name="name" type="text" :value="old('name', $user->name)" required />
        <x-form.input name="username" type="text" :value="old('username', $user->username)" required />
        <x-form.input name="avatar" type="file" />
        <x-form.input name="email" type="email" :value="old('email', $user->email)" required />
        <x-form.input name="password" type="password" required />
        <x-form.input name="password_confirmation" type="password" required />
        <x-form.button>Update</x-form.button>
        <a href="{{ $user->path() }}" class="ml-4 hover:underline">Cancel</a>

    </form>
</div>
