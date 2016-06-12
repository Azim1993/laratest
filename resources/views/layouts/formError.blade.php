@if ($errors->has($inputFieldName))
    <span class="help-block">
        <strong>{{ $errors->first($inputFieldName) }}</strong>
    </span>
@endif