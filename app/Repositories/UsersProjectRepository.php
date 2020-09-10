<?php


namespace App\Repositories;


use App\Repositories\Interfaces\UsersProjectRepositoryInterface;
use App\UsersProject;

class UsersProjectRepository implements UsersProjectRepositoryInterface
{

    public function all()
    {
        return UsersProject::all();
    }
}
