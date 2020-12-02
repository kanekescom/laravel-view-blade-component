<x-form class="btn-group btn-group-sm" :action="$model->url->destroy">
    @method('DELETE')

    <button class="btn btn-danger" onclick="return confirm(&quot;{{ $confirmDelete }}&quot;);">
        @if ($useIcon)
            <i class="fas fa-trash" aria-hidden="true"></i>
        @endif

        @if ($useLabel)
            {{ $actionLabel['delete'] ?? '' }}
        @endif
    </button>
</x-form>
