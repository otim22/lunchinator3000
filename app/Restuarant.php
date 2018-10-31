<?php

namespace App;

use App\User;
use App\Review;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;

class Restuarant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'wait_time_minutes', 'type', 'image', 'description'
    ];

    /**
     * A restuarant belongsToMany users
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * A restuarant can have many reviews
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
