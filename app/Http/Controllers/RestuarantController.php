<?php

namespace App\Http\Controllers;

use App\Restuarant;
use Illuminate\Http\Request;

class RestuarantController extends Controller
{
    /**
     * Get all restuarant
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $resturants = fetch('https://interview-project-17987.herokuapp.com/api/restaurants');

        // return response(['data', Restuarant::all()->toArray()]);
        return response(['data', $restaurants]);
    }

    /**
     * Create a new Restuarant resource.
     *
     * @param Request $request request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function store(Request $request)
    {
        $restaurant = Restuarant::create([
            'user_id' => $request->user()->id,
            'wait_time_minutes' => $request->wait_time_minutes,
            'type' => $request->type,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        return response()->json($restaurant, 201);
    }

    /**
     * Get one Restuarant
     *
     * @param int $restuarantId restuarantId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function show(Restuarant $restaurant)
    {
        return response()->json($restaurant);
    }

}
