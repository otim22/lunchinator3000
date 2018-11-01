<?php

namespace App\Http\Controllers;

use App\Voter;
use Illuminate\Http\Request;

class VoterController extends Controller
{

    /**
     * Create a new voter resource.
     *
     * @param Request $request request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function store(Resquest $request)
    {
        $voter = Voter::firstOrCreate(
            [
              'name' => $request->name,
              'email' => $resturant->id
            ]
        );

        return response()->json($voter, 201);
    }

}
