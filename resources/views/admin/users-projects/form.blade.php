<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id"
           value="{{ isset($usersproject->user_id) ? $usersproject->user_id : ''}}">
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('project_id') ? 'has-error' : ''}}">
    <label for="project_id" class="control-label">{{ 'Project Id' }}</label>
    <input class="form-control" name="project_id" type="number" id="project_id"
           value="{{ isset($usersproject->project_id) ? $usersproject->project_id : ''}}">
    {!! $errors->first('project_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('default') ? 'has-error' : ''}}">
    <label for="default" class="control-label">{{ 'Default' }}</label>
    <div class="radio">
        <label><input name="default" type="radio"
                      value="1" {{ (isset($usersproject) && 1 == $usersproject->default) ? 'checked' : '' }}>
            Yes</label>
    </div>
    <div class="radio">
        <label><input name="default" type="radio"
                      value="0" @if (isset($usersproject)) {{ (0 == $usersproject->default) ? 'checked' : '' }} @else {{ 'checked' }} @endif>
            No</label>
    </div>
    {!! $errors->first('default', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
