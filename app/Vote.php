<?php

namespace App;

use App\Ballot;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'restuarant_id', 'user_id', 'vote'
    ];


    public function ballot()
    {
        return $this->hasMany(Ballot::class);
    }

}
