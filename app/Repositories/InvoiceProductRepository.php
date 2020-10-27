<?php


namespace App\Repositories;


use App\Models\InvoiceProduct;
use App\Repositories\Interfaces\InvoiceProductRepositoryInterface;

class InvoiceProductRepository implements InvoiceProductRepositoryInterface
{

    public function all()
    {
        return InvoiceProduct::all();
    }
}
