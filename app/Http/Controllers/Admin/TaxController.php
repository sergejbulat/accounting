<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tax;
use Illuminate\Http\Request;


class TaxController extends Controller
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
            $tax = Tax::where('name', 'LIKE', "%$keyword%")
                ->orWhere('percent', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tax = Tax::latest()->paginate($perPage);
        }

        return view('admin.tax.index', compact('tax'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tax.create');
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
			'name' => 'required|max:20',
			'percent' => 'required|max:20|numeric'
		]);
        $requestData = $request->all();

        Tax::create($requestData);

        return redirect('admin/tax')->with('flash_message', 'Tax added!');
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
        $tax = Tax::findOrFail($id);

        return view('admin.tax.show', compact('tax'));
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
        $tax = Tax::findOrFail($id);

        return view('admin.tax.edit', compact('tax'));
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
			'name' => 'required|max:20',
			'percent' => 'required|max:20|numeric'
		]);
        $requestData = $request->all();

        $tax = Tax::findOrFail($id);
        $tax->update($requestData);

        return redirect('admin/tax')->with('flash_message', 'Tax updated!');
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
        Tax::destroy($id);

        return redirect('admin/tax')->with('flash_message', 'Tax deleted!');
    }
}
