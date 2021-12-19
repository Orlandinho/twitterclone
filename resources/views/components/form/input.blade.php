@props(['name'])

<div class="mb-6">
    <x-form.label name="{{ $name }}" />
    <input name="{{ $name }}" id="{{ $name }}" class="w-full" {{ $attributes(['value' => old($name) ]) }}>
    <x-form.error name="{{ $name }}" />
</div>
