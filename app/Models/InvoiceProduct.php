<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceProduct extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invoice_products';

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
    protected $fillable = ['invoice_id', 'product_id', 'sale_price', 'recommended_price', 'quantity'];

    public function invoice()
    {
        return $this->belongsTo('App\Models\Invoice');
    }
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

}
