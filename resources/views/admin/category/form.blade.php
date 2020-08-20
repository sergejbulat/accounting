<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($category->name) ? $category->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tax_id') ? 'has-error' : ''}}">
    <label for="tax_id" class="control-label">{{ 'Tax Id' }}</label>
    <input class="form-control" name="tax_id" type="number" id="tax_id" value="{{ isset($category->tax_id) ? $category->tax_id : ''}}" >
    {!! $errors->first('tax_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
