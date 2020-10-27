<?php


namespace App\Repositories;

use App\Models\Rule;
use App\Repositories\Interfaces\RuleRepositoryInterface;

class RuleRepository implements RuleRepositoryInterface
{

    public function all()
    {
        return Rule::all();
    }
}
