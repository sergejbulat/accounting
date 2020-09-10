<?php


namespace App\Repositories;

use App\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function all()
    {
        return Category::all();
    }
}
