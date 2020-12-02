<a href="{{ $href }}" {{ $attributes->merge([
    'class' => $class,
    ]) }}>
    {!! $label ?? $slot !!}
</a>
