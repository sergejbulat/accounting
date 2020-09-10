<?php


namespace App\Repositories;


use App\Project;
use App\Repositories\Interfaces\ProjectRepositoryInterface;

class ProjectRepository implements ProjectRepositoryInterface
{

    public function all()
    {
        return Project::all();
    }
}
