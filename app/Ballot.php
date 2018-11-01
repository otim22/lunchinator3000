<?php

namespace App;

use App\Vote;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;

class Ballot extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ballot_id', 'endTime', 'updated_at', 'created_at'
    ];

    /**
     * A ballot hasMany votes
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */

    public function vote()
    {
        return $this->hasMany(Vote::class);
    }

}
