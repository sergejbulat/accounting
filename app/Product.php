<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

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
    protected $fillable = ['name', 'volume', 'project_id', 'category_id', 'current_count'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
    
}
