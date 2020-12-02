<input type={{ $type }} name="{{ $name }}" {{ $checkedAtt }} {{ $attributes->merge([
    'class' => $class,
    'id' => $convertedName,
    'value' => $value,
    ]) }}>
