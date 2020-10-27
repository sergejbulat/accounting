<?php


namespace App\Repositories\Interfaces;


interface UsersRuleRepositoryInterface
{
    public function all();

    public function getByUserId($userId);
}
