<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    // private $userService;

    // public function __construct(UserService $userService)
    // {
    //     $this->userService = $userService;
    // }

    public function createUser(CreateUserRequest $request)
    {
        // // Access the userService instance and call its methods
        // $user = $this->userService->createUser($request->all());
        $req = $request->validated();
        $req = Users::addAdditionalData($req);
        $created = Users::create($req);
        return response()->json([
            'success' => true,
            'message' => 'Successfully create user',
            'data' => $created
        ], 201);
    }
}
