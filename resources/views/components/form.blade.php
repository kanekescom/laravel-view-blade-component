<form method="{{ $method }}" action="{{ $action }}" onsubmit="return checkForm(this);" {{ $attributes }}>
    @csrf

    {!! $slot !!}
</form>

@if (!$hideAnimation)
    @once
        @push('scripts')
            <script type="text/javascript">
                function checkForm(form) {
                    form.querySelector('button[type="submit"]').disabled = true;
                    form.querySelector('button[type="submit"]').innerHTML = '{{ $processingLabel }}';

                    return true;
                }
            </script>
        @endpush
    @endonce
@endif
