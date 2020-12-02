@error($name)
    <span class="invalid-feedback" role="alert" {{ $attributes }}>
        <strong>{!! $message !!}</strong>
    </span>

    {!! $slot !!}
@enderror
