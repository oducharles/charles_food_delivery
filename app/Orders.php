<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $guarded = ['id',];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';    
}
