@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.publications.management'))

@section('breadcrumb-links')
@include('backend.publications.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.publications.management') }} <small class="text-muted">{{ __('labels.backend.access.publications.active') }}</small>
                </h4>   
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="publications-table" class="table" data-ajax_url="{{ route("admin.publications.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.publications.table.year') }}</th>
                                <th>{{ trans('labels.backend.access.publications.table.link') }}</th>
                                <th>{{ trans('labels.backend.access.publications.table.description') }}</th>
                                <th>{{ trans('labels.backend.access.publications.table.status') }}</th>
                                <th>{{ trans('labels.backend.access.publications.table.createdat') }}</th>
                                <th>{{ trans('labels.general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--col-->
        </div>
        <!--row-->

    </div>
    <!--card-body-->
</div>
<!--card-->
@endsection

@section('pagescript')
<script>
    FTX.Utils.documentReady(function() {
        FTX.Publications.list.init();
    });
</script>

@stop