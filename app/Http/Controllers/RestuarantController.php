<?php

namespace App\Http\Controllers;

use App\Restuarant;
use Illuminate\Http\Request;

class RestuarantController extends Controller
{
    /**
     * Get all restuarantController
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response(['data', RestuarantController::all()->toArray()]);
    }

    /**
     * Create a new RestuarantController resource.
     *
     * @param Request $request request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function store()
    {
        
    }

    /**
     * Get one RestuarantController from the database
     *
     * @param int $restuarantControllerId restuarantControllerId
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
     * @param int     $userId  userId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function update()
    {
        
    }

    /**
     * Delete a resource
     *
     * @param int $reviewId reviewId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function delete()
    {
        
    }
}
