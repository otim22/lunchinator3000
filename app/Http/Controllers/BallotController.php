<?php

namespace App\Http\Controllers;

use App\Ballot;
use App\Vote;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

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
    public function store(Request $request)
    {
        $data = $request->all();
        $ballotId = $this->generateBallotId();
        $endTime = Carbon::createFromFormat('d/m/Y h:m', $data['endTime']);
        $ballot = DB::table('ballots')->insertGetId([
            'ballot_id' => $ballotId,
            'end_time' => $endTime
        ]);

        DB::table('voters')->insert($this->mapVoters($data['voters']));

        return response()->json(['ballotId' => $ballotId], 200);
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

    /**
     * Generates a GUID 
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function generateBallotId() {
        return (string) Str::uuid();
    }

    /**
     * Return a collection of voters
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function mapVoters($voters)
    {
        return collect($voters)->map(function($item, $key) {
            return [
                'name' => $item['name'],
                'email' => $item['emailAddress']
            ];
        })->all();
    }
}
