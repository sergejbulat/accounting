<?php

namespace App\Http\Controllers;

use App\Repositories\UsersProjectRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param UsersProjectRepository $usersProjectRepository
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(UsersProjectRepository $usersProjectRepository)
    {
        $project = $usersProjectRepository->getCurrentProject();

        return view('home', compact('project'));
    }
}
