<div {{ $attributes->merge([
    'class' => 'form-group row',
    ]) }}>
    <label for="{{ $name }}" class="{{ $labelWidth }} col-form-label text-md-right">
        {{ $label }}
    </label>

    <div class="{{ $formWidth }}">
        {{ $slot }}

        @if (!$hideInvalid)
            <x-invalid :name="$name" />
        @endif
    </div>
</div>
