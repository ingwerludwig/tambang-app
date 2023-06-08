<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Requests\CreateDriverRequest;

class DriverController extends Controller
{
    // private $driverService;

    // public function __construct(DriverService $driverService)
    // {
    //     $this->driverService = $driverService;
    // }

    public function createDriver(CreateDriverRequest $request)
    {
        // // Access the userService instance and call its methods
        // $user = $this->driverService->createUser($request->all());

        $req = $request->validated();
        $req = Driver::addAdditionalData($req);
        $created = Driver::create($req);
        return response()->json([
            'success' => true,
            'message' => 'Successfully create driver',
            'data' => $created
        ], 201);
    }
}
