<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Get all users
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response(['data', User::all()->toArray()]);
    }

    /**
     * Create a new user resource.
     *
     * @param Request $request request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function store(Resquest $request)
    {
        $this->validate(
            $request, [
                name => 'required',
                email => 'required|unique:users|email'
            ]
        );

        $data = [
            'name' => $request->name,
            'email' => $request->email
        ];

        $user = User::create($data);

        $statusCode = $user ? 200 : 422;

        return response(
            [
                'data' => $user,
                'status' => $user ? "successful" : "error occured",
            ], $statusCode
        );
    }

    /**
     * Get one user from the database
     *
     * @param int $userId userId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function show($userId)
    {
        try {
            $user = User::findOrFail($userId);
        } catch (\Exception $e){
            $user = null;
            $statusCode = 404;
        }

        return response(
            [
                'data' => $user,
                'status' => $user ? "success" : "Not found.",
            ], $statusCode ?? 201
        );
    }

    /**
     * Implement a full/partial update
     *
     * @param Request $request request
     * @param int     $userId  userId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function update(Request $request, $userId)
    {
        try {
            $user = self::userExist($userId);
            $user->update($request->only('name', 'password'));
        } catch (\Exception $e) {
            $user = null;
            $statusCode = 404;
        }

        return response (
            [
                "data" => $user,
                "status" => $user ? "success" : "Not found."
            ], $statusCode ?? 200
        );
    }

    /**
     * Delete a resource
     *
     * @param int $userId userId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function delete($userId)
    {
        try {
            $user = self::userExist($userId);
            $user->delete();
        } catch(\Exception $e) {
            $user = null;
            $statusCode = 404;
        }

        return response(
            [
                "data" => $user,
                "status" => $user ? "success" : "Not found."
            ], $statusCode ?? 200
        );
    }

    /**
     * Check if user exist by id
     *
     * @param int $id id
     *
     * @return bool|mixed|static
     */
    protected static function userExist($id)
    {
        return User::findOrFail($id);
    }
}
