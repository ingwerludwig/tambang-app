<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryService;
use App\Http\Requests\CreateHistoryServiceRequest;

class ServiceHistoryController extends Controller
{
    // private $serviceHistoryService;

    // public function __construct(ServiceHistoryService $serviceHistoryService)
    // {
    //     $this->serviceHistoryService = $serviceHistoryService;
    // }

    public function createReport(CreateHistoryServiceRequest $request)
    {
        // // Access the userService instance and call its methods
        // $user = $this->userService->createUser($request->all());

        $req = $request->validated();
        $req = HistoryService::addAdditionalData($req);
        $created = HistoryService::create($req);
        return response()->json([
            'success' => true,
            'message' => 'Successfully create service history',
            'data' => $created
        ], 201);
    }
}
