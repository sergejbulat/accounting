<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\UsersProject;
use Illuminate\Http\Request;

class UsersProjectsController extends Controller
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
            $usersprojects = UsersProject::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('project_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $usersprojects = UsersProject::latest()->paginate($perPage);
        }

        return view('admin.users-projects.index', compact('usersprojects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.users-projects.create');
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
        
        UsersProject::create($requestData);

        return redirect('admin/users-projects')->with('flash_message', 'UsersProject added!');
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
        $usersproject = UsersProject::findOrFail($id);

        return view('admin.users-projects.show', compact('usersproject'));
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
        $usersproject = UsersProject::findOrFail($id);

        return view('admin.users-projects.edit', compact('usersproject'));
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
        
        $requestData = $request->all();
        
        $usersproject = UsersProject::findOrFail($id);
        $usersproject->update($requestData);

        return redirect('admin/users-projects')->with('flash_message', 'UsersProject updated!');
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
        UsersProject::destroy($id);

        return redirect('admin/users-projects')->with('flash_message', 'UsersProject deleted!');
    }
}
