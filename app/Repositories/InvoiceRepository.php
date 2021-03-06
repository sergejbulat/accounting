<?php


namespace App\Repositories;


use App\Models\Invoice;
use App\Repositories\Interfaces\InvoiceRepositoryInterface;

class InvoiceRepository implements InvoiceRepositoryInterface
{

    public function all()
    {
        return Invoice::all();
    }
}
