<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sales';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['invoice_id', 'invoice_product_id', 'quantity', 'price'];

    public function invoice()
    {
        return $this->belongsTo('App\Models\Invoice');
    }
    public function InvoiceProduct()
    {
        return $this->belongsTo('App\Models\InvoiceProducts');
    }

}
