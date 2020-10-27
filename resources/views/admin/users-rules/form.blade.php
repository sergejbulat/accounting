<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id"
           value="{{ isset($usersrule->user_id) ? $usersrule->user_id : ''}}">
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rule_id') ? 'has-error' : ''}}">
    <label for="rule_id" class="control-label">{{ 'Rule Id' }}</label>
    <input class="form-control" name="rule_id" type="number" id="rule_id"
           value="{{ isset($usersrule->rule_id) ? $usersrule->rule_id : ''}}">
    {!! $errors->first('rule_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
