<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\InvoiceProduct;
use Illuminate\Http\Request;


class InvoiceProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $invoiceproducts = InvoiceProduct::where('invoice_id', 'LIKE', "%$keyword%")
                ->orWhere('product_id', 'LIKE', "%$keyword%")
                ->orWhere('sale_price', 'LIKE', "%$keyword%")
                ->orWhere('recommended_price', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $invoiceproducts = InvoiceProduct::latest()->paginate($perPage);
        }

        return view('admin.invoice-products.index', compact('invoiceproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.invoice-products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'price' => 'required|max:10',
			'quantity' => 'required|max:10'
		]);
        $requestData = $request->all();

        InvoiceProduct::create($requestData);

        return redirect('admin/invoice-products')->with('flash_message', 'InvoiceProduct added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $invoiceproduct = InvoiceProduct::findOrFail($id);

        return view('admin.invoice-products.show', compact('invoiceproduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $invoiceproduct = InvoiceProduct::findOrFail($id);

        return view('admin.invoice-products.edit', compact('invoiceproduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'price' => 'required|max:10',
			'quantity' => 'required|max:10'
		]);
        $requestData = $request->all();

        $invoiceproduct = InvoiceProduct::findOrFail($id);
        $invoiceproduct->update($requestData);

        return redirect('admin/invoice-products')->with('flash_message', 'InvoiceProduct updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        InvoiceProduct::destroy($id);

        return redirect('admin/invoice-products')->with('flash_message', 'InvoiceProduct deleted!');
    }
}
