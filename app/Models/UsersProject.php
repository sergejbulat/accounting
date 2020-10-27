<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersProject extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users_projects';

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
    protected $fillable = ['user_id', 'project_id', 'default'];

    /**
     * @var mixed
     */
    private $project;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }

}
