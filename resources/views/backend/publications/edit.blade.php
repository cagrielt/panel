@extends('backend.layouts.app')

@section('title', __('labels.backend.access.publications.management') . ' | ' . __('labels.backend.access.publications.edit'))

@section('breadcrumb-links')
    @include('backend.publications.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::model($publications, ['route' => ['admin.publications.update', $publications], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.publications.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.publications.index', 'id' => $publications->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection