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

    /**
     * A review belongsTo a restuarant
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function restuarant()
    {
        return $this->belongsTo(Restuarant::class);
    }

    /**
     * Calculate the average rating of a restuarant
     *
     * @return integer
     */
    public function averageRating()
    {
        $ratings = $this->rating;
        if (!$ratings->isEmpty()) {
            $sum = 0;
            foreach ($ratings as $rating) {
                $sum += $rating->rating;
            }
            return $sum / $ratings->count();
        }
    }

}
