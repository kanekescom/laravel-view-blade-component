<div {{ $attributes->merge([
    'class' => 'btn-group btn-group-sm',
    'role' => 'group',
    'style' => 'display:flex;',
    'aria-label' => 'Action buttons',
    ]) }}>
    @if (!in_array('show', $hides) && isset($model->url->show))
        @if ($usePermission)
            @can("{$resource}.show")
                @include('view-blade-component::components.action-grid-show')
            @endcan
        @else
            @include('view-blade-component::components.action-grid-show')
        @endif
    @endif

    @if (!in_array('edit', $hides) && isset($model->url->edit))
        @if ($usePermission)
            @can("{$resource}.edit")
                @include('view-blade-component::components.action-grid-edit')
            @endcan
        @else
            @include('view-blade-component::components.action-grid-edit')
        @endif
    @endif

    @if (!in_array('delete', $hides) && isset($model->url->destroy))
        @if ($usePermission)
            @can("{$resource}.destroy")
                @include('view-blade-component::components.action-grid-delete')
            @endcan
        @else
            @include('view-blade-component::components.action-grid-delete')
        @endif
    @endif
</div>
