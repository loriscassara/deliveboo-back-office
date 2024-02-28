<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRestaurantRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Type;
use illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view("admin.products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Type::with(['user'])->find($id);
        $types = Type::all();
        return view("admin.restaurants.create", compact("types"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request, Restaurant $restaurant)
    {
        $data = $request->validated();

        if ($request->hasFile("cover_image")) {

            if ($restaurant->cover_image) {
                Storage::disk("public")->delete($restaurant->cover_image);
            }
            $percorso = Storage::disk("public")->put('/uploads', $request['cover_image']);
            $data["cover_image"] = $percorso;
        }
        //$percorso = Storage::disk("public")->put('/uploads', $request['image']);
        //$dati_validati["image"] = $percorso;
        $newRestaurant = new Restaurant();
        //ricordate che per usare il fill bisogna popolare fillable nel model
        //altrimenti alcuni dati non verranno scritti ;)
        $userId = Auth::id();
        $newRestaurant->user_id = $userId;
        $newRestaurant->fill($data);
        $newRestaurant->save();
        if ($request->types) {
            $newRestaurant->types()->attach($request->types);
        }

        // return redirect()->route("admin.Products.show", $newProduct->id);
        return redirect()->route("admin.restaurants.index", $newRestaurant->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        $products = Product::all();
        return view("admin.restaurants.show", compact("restaurant", "products"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        // return view("admin.restaurants.edit", compact("restaurant"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRestaurantRequest $request, Restaurant $restaurant)
    {
        // $data = $request->all();

        // if ($request->hasFile("cover_image")) {

        //     if ($restaurant->cover_image) {
        //         Storage::disk("public")->delete($restaurant->cover_image);
        //     }
        //     $percorso = Storage::disk("public")->put('/uploads', $request['cover_image']);
        //     $data["cover_image"] = $percorso;
        // }

        // $restaurant->update($data);

        // return redirect()->route("admin.restaurants.show", $restaurant->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        //Cancella immagine dalla cartella storage/app/public/uploads

        Storage::disk("public")->delete('/uploads', $restaurant['cover_image']);
        $restaurant->delete();

        return redirect()->route("admin.restaurants.index");
    }
}
