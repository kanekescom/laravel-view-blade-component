<textarea name="{{ $name }}" {{ $attributes->merge([
    'class' => $class,
    'id' => $convertedName
    ]) }}>{!! $value !!}</textarea>
