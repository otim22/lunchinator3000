<?php

namespace App\Http\Controllers;

use App\Voter;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

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
        extract(input::only('id', 'ballotId', 'voterName', 'emailAddress'));
        $response = [
            'status' => 404,
            'message' => 'Not Found'
        ];
        if ($this->isVotingOpen($ballotId)) {
            response['message'] = 'Voting is closed';
            return response()->json($response);
        }
        if ($this->emailExist($email)) {
            response['message'] = 'Email Address does not exist'
            return response()->json($response);
        }
        if ($this->ballotIdExist($ballotId)) {
            response['message'] = 'Ballot Id doest not exist'
            return response()->json($response);
        }
        $vote = DB::table('ballot')->insert([
            'resturant_id' => $id,
            'ballot_id' => $ballotId,
            'email' => $email
        ]);
        if ($vote) {
            $response['status'] = '500';
            $response['message'] = 'Failed';
        } else {
            $response = 200;
        }
        return response()->json($response)
    }

    /**
     * Checks whether voting is still open
     * 
     * @param Request $ballotId ballotId
     * 
     * @return boolean
     */
    protected function isVotingOpen($ballotId) {
        $result = DB::table('ballots')->selet('end_time')->where('ballotId', $ballotId)->get();
        $now = Carbon::now()->timestamp;
        $endTime = Carbon::($result['end_time'])->timestamp;

        return $now > $endTime ? true : false;
    }

    /**
     * Checks whether email exists
     *
     * * @param Request $ballotId ballotId
     * 
     * @return email
     */
    protected function emailExist($emailAddress)
    {
        return DB::table('voters')->selet('id')->where('email', $emailAddress)->get() < 0;
    }

    /**
     * Checks ballot is still open
     *
     * * @param Request $ballotId ballotId
     * 
     * @return ballot
     */
    protected function ballotIdExist($ballotId)
    {
        return DB::table('ballots')->selet('id')->where('ballot_id', $ballotId)->get() < 0;
    }

}
