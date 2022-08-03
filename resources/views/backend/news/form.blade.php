<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.news.management') }}
                <small class="text-muted">{{ __('labels.backend.access.news.create') }}</small>
            </h4>
        </div>
        <!--col-->
    </div>
    <!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('intived_number', trans('validation.attributes.backend.access.news.intived_number'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('intived_number', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.news.intived_number'), 
                    'required' => 'required']) }}
                </div>
                <!--col-->
            </div>
            <!--form-group-->

            <div class="form-group row">
                {{ Form::label('invited_talks', trans('validation.attributes.backend.access.news.invited_talks'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::textarea('invited_talks', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.news.invited_talks')]) }}
                </div>
                <!--col-->
            </div>
            <!--form-group-->

            <div class="form-group row">
                {{ Form::label('status', trans('validation.attributes.backend.access.news.status'), ['class' => 'col-md-2 from-control-label required']) }}

                @php
                $status = isset($news) ? '' : 'checked'
                @endphp
                
                <div class="col-md-10">
                    <div class="checkbox d-flex align-items-center">
                        <label class="switch switch-label switch-pill switch-primary mr-2" for="role-1"><input class="switch-input" type="checkbox" name="status" id="role-1" value="1" {{ (isset($news->status) && $news->status === 1) ? "checked" : $status }}><span class="switch-slider" data-checked="on" data-unchecked="off"></span></label>
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
        FTX.News.edit.init("{{ config('locale.languages.' . app()->getLocale())[1] }}");
    });
</script>
@stop