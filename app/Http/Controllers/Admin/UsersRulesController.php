<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\UsersRule;
use Illuminate\Http\Request;

class UsersRulesController extends Controller
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
            $usersrules = UsersRule::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('rule_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $usersrules = UsersRule::latest()->paginate($perPage);
        }

        return view('admin.users-rules.index', compact('usersrules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.users-rules.create');
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

        $requestData = $request->all();

        UsersRule::create($requestData);

        return redirect('admin/users-rules')->with('flash_message', 'UsersRule added!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $usersrule = UsersRule::findOrFail($id);

        return view('admin.users-rules.show', compact('usersrule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $usersrule = UsersRule::findOrFail($id);

        return view('admin.users-rules.edit', compact('usersrule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $usersrule = UsersRule::findOrFail($id);
        $usersrule->update($requestData);

        return redirect('admin/users-rules')->with('flash_message', 'UsersRule updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        UsersRule::destroy($id);

        return redirect('admin/users-rules')->with('flash_message', 'UsersRule deleted!');
    }
}
