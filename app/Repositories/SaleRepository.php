<?php


namespace App\Repositories;


use App\Repositories\Interfaces\SaleRepositoryInterface;
use App\Sale;

class SaleRepository implements SaleRepositoryInterface
{

    public function all()
    {
        return Sale::all();
    }
}
