<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $restaurant = Restaurant::select('id')->where('user_id', Auth::id())->first();
        // $orders = Order::all()->where("restaurant_id", $restaurant?->id);
        // $currentUser = Auth::id();
        // $orders = Order::all()->where("restaurant_id", $restaurant?->id);

        $restaurant = Restaurant::select('id')->where('user_id', Auth::id())->first();
        $loggedUserId = Auth::user()->id;

        $restaurantId = Restaurant::where('user_id', $loggedUserId)->value('id');

        $orders = Order::whereHas('products', function ($query) use ($restaurantId) {
            $query->where('restaurant_id', $restaurantId);
        })
            ->get();


        return view("admin.orders.index", compact("orders", "restaurant"));
    }

   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
