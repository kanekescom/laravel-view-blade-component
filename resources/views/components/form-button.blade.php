<button type="{{ $type }}" {{ $attributes->merge([
    'class' => $class,
    ]) }}>
    {!! $label ?? $slot !!}
</button>
