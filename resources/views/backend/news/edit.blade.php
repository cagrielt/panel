@extends('backend.layouts.app')

@section('title', __('labels.backend.access.news.management') . ' | ' . __('labels.backend.access.news.edit'))

@section('breadcrumb-links')
    @include('backend.news.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::model($news, ['route' => ['admin.news.update', $news], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.news.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.news.index', 'id' => $news->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection