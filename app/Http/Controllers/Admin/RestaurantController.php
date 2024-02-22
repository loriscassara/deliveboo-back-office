<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Tag;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all();

        return view("admin.restaurants.index", compact("restaurants"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();

        return view("admin.restaurants.create", compact("tags"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        $validati = $request->validated();

        $newRestaurant = new Restaurant();
        //ricordate che per usare il fill bisogna popolare fillable nel model
        //altrimenti alcuni dati non verranno scritti ;)
        $newRestaurant->fill($validati);
        $newRestaurant->save();

        if ($request->tags) {
            $newRestaurant->tags()->attach($request->tags);
        }

        // return redirect()->route("admin.restaurants.show", $newrestaurant->id);
        return redirect()->route("admin.restaurants.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
