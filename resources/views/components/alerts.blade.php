<!-- Messages Alert -->
@if (session('primary') && in_array('primary', $showType))
    <x-alert type="primary" :message="session('primary')" :hideCloseButton="$hideCloseButton"/>
@endif

@if (session('secondary') && in_array('secondary', $showType))
    <x-alert type="secondary" :message="session('secondary')" :hideCloseButton="$hideCloseButton"/>
@endif

@if (session('success') && in_array('success', $showType))
    <x-alert type="success" :message="session('success')" :hideCloseButton="$hideCloseButton"/>
@endif

@if (session('danger') && in_array('danger', $showType))
    <x-alert type="danger" :message="session('danger')" :hideCloseButton="$hideCloseButton"/>
@endif

@if (session('warning') && in_array('warning', $showType))
    <x-alert type="warning" :message="session('warning')" :hideCloseButton="$hideCloseButton"/>
@endif

@if (session('info') && in_array('info', $showType))
    <x-alert type="info" :message="session('info')" :hideCloseButton="$hideCloseButton"/>
@endif

@if (session('light') && in_array('light', $showType))
    <x-alert type="light" :message="session('light')" :hideCloseButton="$hideCloseButton"/>
@endif

@if (session('dark') && in_array('dark', $showType))
    <x-alert type="dark" :message="session('dark')" :hideCloseButton="$hideCloseButton"/>
@endif

@if (session('status') && in_array('status', $showType))
    <x-alert type="success" :message="session('status')" :hideCloseButton="$hideCloseButton"/>
@endif

@if (session('verified') && in_array('verified', $showType))
    <x-alert type="success" :message="session('verified')" :hideCloseButton="$hideCloseButton"/>
@endif

@if (session('failed') && in_array('failed', $showType))
    <x-alert type="danger" :message="session('failed')" :hideCloseButton="$hideCloseButton"/>
@endif

@if (session('message') && in_array('message', $showType))
    <x-alert type="success" :message="session('message')" :hideCloseButton="$hideCloseButton"/>
@endif

<!-- Validation Erors Alert -->
@if (!$hideValidation && $errors->any() && in_array('validation', $showType))
    @if ($showErrorMessages)
        <x-alert type="danger" :message="$validationMessage" :validationErrors="$errors" :hideCloseButton="$hideCloseButton"/>
    @else
        <x-alert type="danger" :message="$validationMessage" :hideCloseButton="$hideCloseButton"/>
    @endif
@endif
