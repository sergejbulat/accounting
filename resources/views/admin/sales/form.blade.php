<div class="form-group {{ $errors->has('invoice_id') ? 'has-error' : ''}}">
    <label for="invoice_id" class="control-label">{{ 'Invoice Id' }}</label>
    <input class="form-control" name="invoice_id" type="number" id="invoice_id" value="{{ isset($sale->invoice_id) ? $sale->invoice_id : ''}}" >
    {!! $errors->first('invoice_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('invoice_product_id') ? 'has-error' : ''}}">
    <label for="invoice_product_id" class="control-label">{{ 'Invoice Product Id' }}</label>
    <input class="form-control" name="invoice_product_id" type="number" id="invoice_product_id" value="{{ isset($sale->invoice_product_id) ? $sale->invoice_product_id : ''}}" >
    {!! $errors->first('invoice_product_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($sale->quantity) ? $sale->quantity : ''}}" required>
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($sale->price) ? $sale->price : ''}}" required>
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
