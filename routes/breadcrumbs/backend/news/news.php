<?php

Breadcrumbs::for('admin.news.index', function ($trail) {
    $trail->push(__('labels.backend.access.news.management'), route('admin.news.index'));
});

Breadcrumbs::for('admin.news.create', function ($trail) {
    $trail->parent('admin.news.index');
    $trail->push(__('labels.backend.access.news.management'), route('admin.news.create'));
});

Breadcrumbs::for('admin.news.edit', function ($trail, $id) {
    $trail->parent('admin.news.index');
    $trail->push(__('labels.backend.access.news.management'), route('admin.news.edit', $id));
});


