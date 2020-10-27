<?php


namespace App\Repositories;


use App\Models\Tax;
use App\Repositories\Interfaces\TaxRepositoryInterface;

class TaxRepository implements TaxRepositoryInterface
{

    public function all()
    {
        return Tax::all();
    }
}
