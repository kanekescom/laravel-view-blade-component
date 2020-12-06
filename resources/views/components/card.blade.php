

<div {{ $attributes->merge([
    'class' => 'card',
    ]) }}>
    @isset ($headerSlot)
        {!! $headerSlot !!}
    @else
        @if ($header)
            <div class="card-header {{ $headerClass }}">
                {!! $header !!}
            </div>
        @endif

        @if ($imgLoc === 'top' && $imgSrc)
            <x-img :src="$imgSrc" class="card-img-top"/>
        @endif
    @endisset

    @isset ($bodySlot)
        {!! $bodySlot !!}
    @else
        <div class="card-body {{ $bodyClass }}">
            @if ($title)
                <h5 class="card-title">{!! $title !!}</h5>
            @endif

            @if ($subtitle)
                <h6 class="card-subtitle mb-2 text-muted">{!! $subtitle !!}</h6>
            @endif

            @if ($text)
                <p class="card-text">{!! $text !!}</p>
            @endif

            {!! $slot !!}
        </div>
    @endisset

    @isset ($footerSlot)
        {!! $footerSlot !!}
    @else
        @if ($imgLoc === 'bottom' && $imgSrc)
            <x-img :src="$imgSrc" class="card-img-bottom"/>
        @endif

        @if ($footer)
            <div class="card-footer {{ $footerClass }}">{!! $footer !!}</div>
        @endif
    @endisset
</div>
