<x-a class="btn btn-primary" :href="$model->url->edit">
    @if ($useIcon)
        <i class="fas fa-edit" aria-hidden="true"></i>
    @endif

    @if ($useLabel)
        {{ $actionLabel['edit'] ?? '' }}
    @endif
</x-a>
