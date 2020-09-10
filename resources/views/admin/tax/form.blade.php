<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($tax->name) ? $tax->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('percent') ? 'has-error' : ''}}">
    <label for="percent" class="control-label">{{ 'Percent' }}</label>
    <input class="form-control" name="percent" type="number" id="percent" value="{{ isset($tax->percent) ? $tax->percent : ''}}" required>
    {!! $errors->first('percent', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
