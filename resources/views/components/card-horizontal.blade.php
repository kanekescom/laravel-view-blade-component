<div {{ $attributes->merge([
    'class' => $class,
    ]) }}>
    @isset ($headerSlot)
        {!! $headerSlot !!}
    @else
        @if ($header)
            <div class="card-header {{ $headerClass }}">
                {!! $header !!}
                {!! $headerToolSlot ?? '' !!}
            </div>
        @endif
    @endisset

    <div class="row no-gutters">
        @isset ($bodySlot)
            {!! $bodySlot !!}
        @else
            @if ($imgLoc === 'left' && $imgSrc)
                <div class="col-md-4">
                    <x-img :src="$imgSrc" class="card-img"/>
                </div>
            @endif

            <div class="col-md-8">
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
            </div>

            @if ($imgLoc === 'right' && $imgSrc)
                <div class="col-md-4">
                    <x-img :src="$imgSrc" class="card-img"/>
                </div>
            @endif
        @endisset
    </div>

    @isset ($footerSlot)
        {!! $footerSlot !!}
    @else
        @if ($footer)
            <div class="card-footer {{ $footerClass }}">{!! $footer !!}</div>
        @endif
    @endisset
</div>
