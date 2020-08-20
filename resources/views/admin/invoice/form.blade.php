<div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
    <label for="number" class="control-label">{{ 'Number' }}</label>
    <input class="form-control" name="number" type="number" id="number" value="{{ isset($invoice->number) ? $invoice->number : ''}}" required>
    {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ isset($invoice->date) ? $invoice->date : ''}}" >
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
