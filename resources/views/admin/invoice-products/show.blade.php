@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">InvoiceProduct {{ $invoiceproduct->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/invoice-products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/invoice-products/' . $invoiceproduct->id . '/edit') }}" title="Edit InvoiceProduct"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/invoiceproducts' . '/' . $invoiceproduct->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete InvoiceProduct" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $invoiceproduct->id }}</td>
                                    </tr>
                                    <tr><th> Invoice Id </th><td> {{ $invoiceproduct->invoice_id }} </td></tr><tr><th> Product Id </th><td> {{ $invoiceproduct->product_id }} </td></tr><tr><th> Sale Price </th><td> {{ $invoiceproduct->sale_price }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
