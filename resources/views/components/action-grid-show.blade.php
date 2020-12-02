<x-a class="btn btn-primary" :href="$model->url->show">
    @if ($useIcon)
        <i class="fas fa-eye" aria-hidden="true"></i>
    @endif

    @if ($useLabel)
        {{ $actionLabel['show'] }}
    @endif
</x-a>
