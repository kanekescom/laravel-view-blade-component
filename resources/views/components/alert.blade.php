<div role="alert" {{ $attributes->merge([
    'class' => $class,
    ]) }}>
    @if (!$hideCloseButton)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif

    @if ($title)
        <h4 class="alert-heading">{{ $title }}</h4>
    @endif

    {!! $message ?? $slot !!}

    @if ($validationErrors)
        <ul class="mb-0">
            @foreach ($validationErrors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    @endif
</div>
