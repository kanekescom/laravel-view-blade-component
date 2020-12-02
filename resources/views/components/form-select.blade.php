<select name="{{ $name }}" {{ $attributes->merge([
    'class' => $class,
    'id' => $convertedName,
    ]) }}>
    @if (!$hideOptional)
        <option value="">{!! $optional !!}</option>
    @endif

    {!! $slot !!}
</select>
