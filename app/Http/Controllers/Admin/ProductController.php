<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Restaurant;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $restaurant = Auth::user()->restaurant;

        if ($restaurant === null) {
            return redirect()->route("admin.restaurants.create");
        }

        $restaurantId = $restaurant->id;

        $products = Product::where("restaurant_id", $restaurantId)->get();

        return view("admin.products.index", compact("products"));
    }



    public function create()
    {
        $restaurant = Auth::user()->restaurant;

        if ($restaurant === null) {
            return redirect()->route("admin.restaurants.create");
        }

        return view("admin.products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request, Product $product)
    {
        $data = $request->validated();
        if ($request->hasFile("image")) {

            if ($product->image) {
                Storage::disk("public")->delete($product->image);
            }
            $percorso = Storage::disk("public")->put('/uploads', $request['image']);
            $data["image"] = $percorso;
        }
        //$percorso = Storage::disk("public")->put('/uploads', $request['image']);
        //$dati_validati["image"] = $percorso;

        $restaurantId = Auth::user()->restaurant->id; //Accede all'istanza del ristorante associao all'utente autenticato.
        $newProduct = new Product();
        $newProduct->restaurant_id = $restaurantId;
        $newProduct->fill($data);
        $newProduct->save();
        //$request->restaurant_id;
        // $newProduct->restaurants()->associate($request->restaurant_id);


        // return redirect()->route("admin.Products.show", $newProduct->id);
        return redirect()->route("admin.products.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("admin.products.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("admin.products.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->all();

        if ($request->hasFile("image")) {

            if ($product->image) {
                Storage::disk("public")->delete($product->image);
            }
            $percorso = Storage::disk("public")->put('/uploads', $request['image']);
            $data["image"] = $percorso;
        }

        $product->update($data);

        return redirect()->route("admin.products.show", $product->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //Cancella immagine dalla cartella storage/app/public/uploads

        /* Storage::disk("public")->delete('/uploads', $product['image']);
         $product->delete();*/

        return redirect()->route("admin.products.index");
    }
}
