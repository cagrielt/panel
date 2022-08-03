@extends('backend.layouts.app')

@section('title', __('labels.backend.access.news.management') . ' | ' . __('labels.backend.access.news.create'))

@section('breadcrumb-links')
    @include('backend.news.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.news.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.news.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.news.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection