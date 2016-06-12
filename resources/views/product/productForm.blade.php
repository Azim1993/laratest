<div class="row form-group{!! $errors->has('ProductName') ? ' has-error' : '' !!}">
    {!! Form::label('ProductName','product Name', array('class' => 'col-md-4 control-label text-right')) !!}
    <div class="col-md-8">
        {!! Form::text('ProductName',old('ProductName'),array('class'=>'form-control','placeholder'=>'Name')) !!}
        @include('layouts.formError',['inputFieldName' => 'ProductName'])
    </div>
</div>

<div class="row form-group{!! $errors->has('ProductStock') ? ' has-error' : '' !!}">
    {!! Form::label('ProductStock','Product Stock', array('class' => 'col-md-4 control-label text-right')) !!}
    <div class="col-md-8">
        {!! Form::number('ProductStock',old('ProductStock'),array('class'=>'form-control','placeholder'=>'stock')) !!}
        @include('layouts.formError',['inputFieldName' => 'ProductStock'])
    </div>
</div>

<div class="row form-group{!! $errors->has('ProductPrice') ? ' has-error' : '' !!}">
    {!! Form::label('ProductPrice','Price', array('class' => 'col-md-4 control-label text-right')) !!}
    <div class="col-md-8">
        {!! Form::number('ProductPrice',old('ProductPrice'),array('class'=>'form-control','placeholder'=>'Price')) !!}
        @include('layouts.formError',['inputFieldName' => 'ProductPrice'])
    </div>
</div>

<div class="row form-group">
    <div class="col-md-4"></div>
    <div class="col-md-8">
        {!! Form::submit($SubmitButton,array('class'=>'btn btn-primary ')) !!}
    </div>
</div>