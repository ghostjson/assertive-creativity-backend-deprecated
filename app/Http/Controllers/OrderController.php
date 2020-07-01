<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrder;
use App\Http\Requests\UpdateOrder;
use App\Http\Resources\OrderResource;
use App\Order;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    function index()  {
        return OrderResource::collection(Order::all());
    }

    function store(StoreOrder $request){
        return Order::create($request->validated());
    }


    function update(Order $order, UpdateOrder $request){
        return $order->update($request->validated());
    }

    function show(Order $order){
        return new OrderResource($order);
    }


    function destroy(Order $order){
        try{
            $order->delete();
            return response()->json(['status'=>'deleted'], 200);
        }
        catch (\Exception $e){
            return response()->json(['status'=>'could not Delete'], 400);
        }
    }
}
