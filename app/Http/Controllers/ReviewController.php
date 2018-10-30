<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Get all reviewId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response(['data', Review::all()->toArray()]);
    }

    /**
     * Create a new review resource.
     *
     * @param Request $request request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function store()
    {
        
    }

    /**
     * Get one reviewId from the database
     *
     * @param int $reviewId reviewId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function show()
    {
        
    }

    /**
     * Implement a full/partial update
     *
     * @param Request $request request
     * @param int     $reviewId  reviewId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function update()
    {
        
    }

    /**
     * Delete review resource
     *
     * @param int $reviewId reviewId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function delete()
    {
        
    }
}
