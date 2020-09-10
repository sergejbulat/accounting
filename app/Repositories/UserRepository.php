<?php


namespace App\Repositories;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{

    public function all()
    {
        return User::all();
    }
}
