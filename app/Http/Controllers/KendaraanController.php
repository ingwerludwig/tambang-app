<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use App\Http\Requests\CreateKendaraanRequest;

class KendaraanController extends Controller
{
    // private $kendaraanService;

    // public function __construct(KendaraanService $kendaraanService)
    // {
    //     $this->kendaraanService = $kendaraanService;
    // }

    public function createKendaraan(CreateKendaraanRequest $request)
    {
        // // Access the userService instance and call its methods
        // $user = $this->kendaraanService->createUser($request->all());

        $req = $request->validated();
        $req = Kendaraan::addAdditionalData($req);
        $created = Kendaraan::create($req);
        return response()->json([
            'success' => true,
            'message' => 'Successfully create kendaraan',
            'data' => $created
        ], 201);
    }
}
