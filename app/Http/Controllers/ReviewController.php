<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    /**
     * Create a new review resource.
     *
     * @param Request $request request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function store(Resquest $request)
    {
        $review = Review::firstOrCreate(
            [
              'user_id' => $request->user()->id,
              'restuarant_id' => $resturant->id,                
              'restaurant' => $resturant->restaurant,                
              'reviewer' => $resturant->reviewer,                
              'rating' => $request->rating,
              'review' => $request->review,
              'reviewerImage' => $request->reviewerImage
            ]
        );

        return response()->json($review, 201);
    }

}
