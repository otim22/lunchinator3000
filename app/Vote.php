<?php

namespace App;

use App\Ballot;
use App\Voter;
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
        'ballot_id', 'restuarant_id', 'email'
    ];

    /**
     * A vote belongsTo ballot
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function ballot()
    {
        return $this->belongsTo(Ballot::class);
    }

    /**
     * A vote hasOne voter
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function voter()
    {
        return $this->hasOne(Voter::class);
    }

}
