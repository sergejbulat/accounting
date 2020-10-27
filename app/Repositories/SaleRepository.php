<?php


namespace App\Repositories;


use App\Models\Sale;
use App\Repositories\Interfaces\SaleRepositoryInterface;

class SaleRepository implements SaleRepositoryInterface
{

    public function all()
    {
        return Sale::all();
    }
}
