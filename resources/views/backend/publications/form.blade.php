<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.publications.management') }}
                <small class="text-muted">{{ __('labels.backend.access.publications.create') }}</small>
            </h4>
        </div>
        <!--col-->
    </div>
    <!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('year', trans('validation.attributes.backend.access.publications.year'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('year', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.publications.year'), 
                    'required' => 'required']) }}
                </div>
                <!--col-->
            </div>
            <div class="form-group row">
                {{ Form::label('link', trans('validation.attributes.backend.access.publications.link'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.publications.link'), 
                    'required' => 'required']) }}
                </div>
                <!--col-->
            </div>
            
            <!--form-group-->

            <div class="form-group row">
                {{ Form::label('description', trans('validation.attributes.backend.access.publications.description'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.publications.description')]) }}
                </div>
                <!--col-->
            </div>
            
            <!--form-group-->

            <div class="form-group row">
                {{ Form::label('status', trans('validation.attributes.backend.access.publications.status'), ['class' => 'col-md-2 from-control-label required']) }}

                @php
                $status = isset($publications) ? '' : 'checked'
                @endphp
                
                <div class="col-md-10">
                    <div class="checkbox d-flex align-items-center">
                        <label class="switch switch-label switch-pill switch-primary mr-2" for="role-1"><input class="switch-input" type="checkbox" name="status" id="role-1" value="1" {{ (isset($publications->status) && $publications->status === 1) ? "checked" : $status }}><span class="switch-slider" data-checked="on" data-unchecked="off"></span></label>
                    </div>
                </div>
                <!--col-->
            </div>
            <!--form-group-->
        </div>
        <!--col-->
    </div>
    <!--row-->
</div>
<!--card-body-->

@section('pagescript')
<script type="text/javascript">
    FTX.Utils.documentReady(function() {
        FTX.publications.edit.init("{{ config('locale.languages.' . app()->getLocale())[1] }}");
    });
</script>
@stop