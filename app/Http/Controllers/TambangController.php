<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LokasiTambang;
use App\Http\Requests\CreateTambangRequest;

class TambangController extends Controller
{
    public function createTambang(CreateTambangRequest $request)
    {
        // // Access the userService instance and call its methods
        // $user = $this->kantorService->createUser($request->all());

        $req = $request->validated();
        $req = LokasiTambang::addAdditionalData($req);
        $created = LokasiTambang::create($req);
        return response()->json([
            'success' => true,
            'message' => 'Successfully create lokasi tambang',
            'data' => $created
        ], 201);
    }
}
