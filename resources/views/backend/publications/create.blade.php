@extends('backend.layouts.app')

@section('title', __('labels.backend.access.publications.management') . ' | ' . __('labels.backend.access.publications.create'))

@section('breadcrumb-links')
    @include('backend.publications.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.publications.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.publications.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.publications.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection