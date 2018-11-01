<?php

namespace App;

use App\Vote;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'updated_at', 'created_at'
    ];

    /**
     * A voter hasOne vote
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function vote()
    {
        return $this->hasOne(Vote::class);
    }

}
