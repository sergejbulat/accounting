<?php


namespace App\Repositories;

use App\Models\UsersRule;
use App\Repositories\Interfaces\UsersRuleRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class UsersRuleRepository implements UsersRuleRepositoryInterface
{
    /**
     * @var UsersRule
     */
    private $userRole;

    public function __construct(UsersRule $usersRule)
    {
        $this->userRole = $usersRule;
    }

    public function all()
    {
        return UsersRule::all();
    }

    /**
     * @param $userId
     * @return Builder[]|Collection
     */
    public function getByUserId($userId)
    {
        return $this->userRole->newQuery()->where('user_id', $userId)->get();
    }
}
