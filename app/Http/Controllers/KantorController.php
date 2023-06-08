<?php

namespace App\Http\Controllers;

use App\Models\Kantor;
use Illuminate\Http\Request;
use App\Http\Requests\CreateKantorRequest;

class KantorController extends Controller
{
    // private $kantorService;

    // public function __construct(KantorService $kantorService)
    // {
    //     $this->kantorService = $kantorService;
    // }

    public function createKantor(CreateKantorRequest $request)
    {
        // // Access the userService instance and call its methods
        // $user = $this->kantorService->createUser($request->all());

        $req = $request->validated();
        $req = Kantor::addAdditionalData($req);
        $created = Kantor::create($req);
        return response()->json([
            'success' => true,
            'message' => 'Successfully create kantor',
            'data' => $created
        ], 201);
    }
}
