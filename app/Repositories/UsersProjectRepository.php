<?php


namespace App\Repositories;


use App\Models\Project;
use App\Models\UsersProject;
use App\Repositories\Interfaces\UsersProjectRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class UsersProjectRepository implements UsersProjectRepositoryInterface
{
    /**
     * @var UsersProject
     */
    private $usersProject;

    public function __construct(UsersProject $usersProject)
    {
        $this->usersProject = $usersProject;
    }

    public function all()
    {
        return UsersProject::all();
    }

    /**
     * @return Project
     */
    public function getCurrentProject(): Project
    {
        $this->usersProject = $this->usersProject
            ->newQuery()
            ->where('user_id', Auth::user()->id)
            ->where('default', true)
            ->first();
        if (!empty($this->usersProject->project)) {
            return $this->usersProject->project;
        }
    }
}
