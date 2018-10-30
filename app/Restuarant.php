<?php

namespace App;

use App\User;
use App\Review;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Restuarant extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'wait_time_minutes', 'type', 'image', 'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class());
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
