<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Users;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\ApproveOrderRequest;

class OrderController extends Controller
{
    // private $orderService;

    // public function __construct(OrderService $orderService)
    // {
    //     $this->orderService = $orderService;
    // }

    public function createOrder(CreateOrderRequest $request)
    {
        // // Access the userService instance and call its methods
        // $user = $this->orderService->createUser($request->all());

        $req = $request->validated();
        $req = Order::addAdditionalData($req);
        $created = Order::create($req);
        return response()->json([
            'success' => true,
            'message' => 'Successfully create order',
            'data' => $created
        ], 201);
    }

    public function getOrderById($orderId)
    {
        $order = Order::where('id', $orderId)->get();
        return $order[0];
    }

    public function getUserById($id_penyetuju)
    {
        $user = Users::where('id', $id_penyetuju)->get();
        return $user[0];
    }

    public function getUserRoleById($role_id)
    {
        $user_role = UserRole::where('id', $role_id)->get();
        return $user_role[0];
    }

    public function approveOrder(ApproveOrderRequest $request)
    {
        $req = $request->validated();
        $existOrder = $this->getOrderById($req['order_id']);
        $existPenyetuju = $this->getUserById($req['id_penyetuju']);
        $existPenyetujuRole = $this->getUserRoleById($existPenyetuju->role);
        
        if ($existOrder == null) {
            return response()->json([
                'success' => false,
                'errors' => ['Can\'t find your order'],
            ], 400);
        } else {
            if($existPenyetujuRole->role_name == "ADMIN"){
                $existOrder['approval_by_admin'] += 1;
            }else if($existPenyetujuRole->role_name == "PENGELOLA_KENDARAAN"){
                $existOrder['approval_by_pengelola'] += 1;
            }
            $existOrder['approval'] = $existOrder['approval'] . ',' . $req['id_penyetuju'];
        }

        if($existOrder['approval_by_admin'] >= 1 && $existOrder['approval_by_pengelola'] >= 1){
            $existOrder['status'] = "APPROVED";
        }
        
        $updateOrder = Order::where('id', $existOrder->id)
            ->update([
                'approval_by_admin' => $existOrder['approval_by_admin'],
                'approval_by_pengelola' => $existOrder['approval_by_pengelola'],
                'approval' => $existOrder['approval'],
                'status' => $existOrder['status']
            ]);
        
        $result = $this->getOrderById($req['order_id']);
    
        return response()->json([
            'success' => true,
            'message' => 'Successfully approving',
            'data' => $result
        ], 200);
    }

}
