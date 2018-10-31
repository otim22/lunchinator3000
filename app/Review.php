<?php

namespace App;

use App\Restuarant;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;

class Review extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'restuarant_id', 'restaurant', 'reviewer', 'rating', 'review', 'reviewerImage'
    ];

    public function restuarant()
    {
        return $this->belongsTo(Restuarant::class);
    }

}
