<div class="form-group {{ $errors->has('invoice_id') ? 'has-error' : ''}}">
    <label for="invoice_id" class="control-label">{{ 'Invoice Id' }}</label>
    <input class="form-control" name="invoice_id" type="number" id="invoice_id" value="{{ isset($invoiceproduct->invoice_id) ? $invoiceproduct->invoice_id : ''}}" >
    {!! $errors->first('invoice_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product_id') ? 'has-error' : ''}}">
    <label for="product_id" class="control-label">{{ 'Product Id' }}</label>
    <input class="form-control" name="product_id" type="number" id="product_id" value="{{ isset($invoiceproduct->product_id) ? $invoiceproduct->product_id : ''}}" >
    {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sale_price') ? 'has-error' : ''}}">
    <label for="sale_price" class="control-label">{{ 'Sale Price' }}</label>
    <input class="form-control" name="sale_price" type="number" id="sale_price" value="{{ isset($invoiceproduct->sale_price) ? $invoiceproduct->sale_price : ''}}" >
    {!! $errors->first('sale_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('recommended_price') ? 'has-error' : ''}}">
    <label for="recommended_price" class="control-label">{{ 'Recommended Price' }}</label>
    <input class="form-control" name="recommended_price" type="number" id="recommended_price" value="{{ isset($invoiceproduct->recommended_price) ? $invoiceproduct->recommended_price : ''}}" >
    {!! $errors->first('recommended_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($invoiceproduct->quantity) ? $invoiceproduct->quantity : ''}}" required>
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
