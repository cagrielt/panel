<?php
Breadcrumbs::for('admin.publications.index', function ($trail) {
    $trail->push('Title Here', route('admin.publications.index'));
});
Breadcrumbs::for('admin.publications.create', function ($trail) {
    $trail->push('Title Here', route('admin.publications.create'));
});
?>

<li class="breadcrumb-menu">
    <div class="btn-group" role="group" aria-label="Button group">
        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="breadcrumb-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ trans('labels.backend.access.publications.all') }}</a>
            <div class="dropdown-menu" aria-labelledby="breadcrumb-dropdown-1">
                <a class="dropdown-item" href="{{ route('admin.publications.index') }}">@lang('menus.backend.access.publications.active')</a>
                <a class="dropdown-item" href="{{ route('admin.publications.create') }}">@lang('menus.backend.access.publications.create')</a>
            </div>
        </div>
    </div>
</li>