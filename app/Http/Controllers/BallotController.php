<?php

namespace App\Http\Controllers;

use App\Ballot;
use Illuminate\Http\Request;

class BallotController extends Controller
{
    /**
     * Get all ballot
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $ballot = Ballot::all()->toArray();

        return response(['data', $ballot]);
    }

    /**
     * Create a new Ballot resource.
     *
     * @param Request $request request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function store(Request $request)
    {
        $ballot = Ballot::create([
            'ballot_id' => $request->ballot()->id,
            'endTime' => $request->endTime
        ]);

        return response()->json($ballot, 201);
    }

    /**
     * Get one ballot
     *
     * @param int $ballotId ballotId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function show(Ballot $ballotId)
    {
        return response()->json($ballotId);
    }

}
