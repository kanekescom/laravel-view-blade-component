<div id="{{ $name }}" tabindex="-1" role="dialog" {{ $attributes->merge([
    'class' => 'modal',
    'data-backdrop' => $static,
    ]) }}>
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered {{ $size }}" role="document">
        <div class="modal-content">
            @if ($title)
                <div class="modal-header">
                    <h5 class="modal-title">{!! $title !!}</h5>

                    @if (!$hideCloseButton)
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    @endif
                </div>
            @endif

            <div class="modal-body">
                {!! $slot !!}
            </div>

            @if ($footer)
                <div class="modal-footer">
                    {!! $footer !!}
                </div>
            @endif
        </div>
    </div>
</div>
