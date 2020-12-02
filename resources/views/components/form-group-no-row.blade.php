<div {{ $attributes->merge([
    'class' => 'form-group',
    ]) }}>
    <label for="{{ $name }}">
        {{ $label }}
    </label>

    {{ $slot }}

    @if (!$hideInvalid)
        <x-invalid :name="$name" />
    @endif
</div>
