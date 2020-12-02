<nav {{ $attributes->merge([
    'class' => $class,
    ]) }}>
    @if(!$hideContainer)
        <div class="container">
    @endif

        @if($brandName)
            <x-a class="navbar-brand" :href="$brandLink">
                {!! $brandName !!}
            </x-a>
        @endif

        @if(!$hideToggler)
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        @endif

        @if($cleanBody)
            {!! $slot !!}
        @else
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {!! $slot !!}
            </div>
        @endif

    @if(!$hideContainer)
        </div>
    @endif
</nav>
