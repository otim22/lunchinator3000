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
     * @param int $id id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function show($id)
    {
        try {
            $user = User::findOrFail($id);
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
     * @param int     $id  id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function update(Request $request, $id)
    {
        try {
            $user = self::userExist($id);
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
     * @param int $id id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function delete($id)
    {
        try {
            $user = self::userExist($id);
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
