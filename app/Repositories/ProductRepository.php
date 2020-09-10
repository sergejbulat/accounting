<?php


namespace App\Repositories;


use App\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

    public function all()
    {
        return Product::all();
    }
}
