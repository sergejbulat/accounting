<?php


namespace App\Repositories;


use App\InvoiceProduct;
use App\Repositories\Interfaces\InvoiceProductRepositoryInterface;

class InvoiceProductRepository implements InvoiceProductRepositoryInterface
{

    public function all()
    {
        return InvoiceProduct::all();
    }
}
