<?php
Breadcrumbs::for('admin.news.index', function ($trail) {
    $trail->push('Title Here', route('admin.news.index'));
});
Breadcrumbs::for('admin.news.create', function ($trail) {
    $trail->push('Title Here', route('admin.news.create'));
});
?>

<li class="breadcrumb-menu">
    <div class="btn-group" role="group" aria-label="Button group">
        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="breadcrumb-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ trans('labels.backend.access.news.all') }}</a>
            <div class="dropdown-menu" aria-labelledby="breadcrumb-dropdown-1">
                <a class="dropdown-item" href="{{ route('admin.news.index') }}">@lang('menus.backend.access.news.active')</a>
                <a class="dropdown-item" href="{{ route('admin.news.create') }}">@lang('menus.backend.access.news.create')</a>
            </div>
        </div>
    </div>
</li>