<div {{ $attributes->merge([
    'class' => 'form-group row',
    ]) }}>
    <label @if ($name) for="{{ $name }}" @endif class="{{ $labelWidth }} col-form-label text-md-right">
        {{ $label }}
    </label>

    <div class="{{ $formWidth }}">
        <div class="form-control-plaintext">
            {{ $slot }}
        </div>
    </div>
</div>
