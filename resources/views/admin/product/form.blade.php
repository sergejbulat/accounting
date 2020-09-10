<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($product->name) ? $product->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('volume') ? 'has-error' : ''}}">
    <label for="volume" class="control-label">{{ 'Volume' }}</label>
    <input class="form-control" name="volume" type="number" id="volume" value="{{ isset($product->volume) ? $product->volume : ''}}" required>
    {!! $errors->first('volume', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('project_id') ? 'has-error' : ''}}">
    <label for="project_id" class="control-label">{{ 'Project Id' }}</label>
    <input class="form-control" name="project_id" type="number" id="project_id" value="{{ isset($product->project_id) ? $product->project_id : ''}}" >
    {!! $errors->first('project_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category Id' }}</label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($product->category_id) ? $product->category_id : ''}}" >
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('current_count') ? 'has-error' : ''}}">
    <label for="current_count" class="control-label">{{ 'Current Count' }}</label>
    <input class="form-control" name="current_count" type="number" id="current_count" value="{{ isset($product->current_count) ? $product->current_count : ''}}" >
    {!! $errors->first('current_count', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
