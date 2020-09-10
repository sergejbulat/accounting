<?php


namespace App\Repositories;


use App\Repositories\Interfaces\TaxRepositoryInterface;
use App\Tax;

class TaxRepository implements TaxRepositoryInterface
{

    public function all()
    {
        return Tax::all();
    }
}
