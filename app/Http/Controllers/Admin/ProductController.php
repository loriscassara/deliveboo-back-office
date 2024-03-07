<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Salvo id ristorante che ha come "user_id" l'utente attualmente loggato. con "get()" non funge con first sì (W3School)
        $restaurant = Restaurant::select('id')->where('user_id', Auth::id())->first();
        $restaurant_id = DB::table('restaurants')->where('user_id', Auth::id())->value("id");
        // $products = Product::all()->where("restaurant_id", $restaurant?->id);
        $products = Product::where("restaurant_id", $restaurant_id)->get();


        return view("admin.products.index", compact("products", "restaurant"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurant = Restaurant::select('id')->where('user_id', Auth::id())->first();
        $products = Product::select("id")->where('restaurant_id', $restaurant)->first();
        if (!$restaurant) {
            return view("errors.product");
        }

        return view("admin.products.create", compact("restaurant"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request, Product $product)
    {
        $restaurantId = Auth::user()->restaurant->id;
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
        //ricordate che per usare il fill bisogna popolare fillable nel model
        //altrimenti alcuni dati non verranno scritti ;)
        //Accede all’istanza del ristorante associao all’utente autenticato.
        $newProduct = new Product();
        $newProduct->restaurant_id = $restaurantId;

        $newProduct->fill($data);
        $newProduct->save();
        // $newProduct->restaurant()->associate($request->restaurant_id);


        // return redirect()->route("admin.Products.show", $newProduct->id);
        return redirect()->route("admin.products.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $restaurant = DB::table('restaurants')->where('user_id', Auth::id())->value("id");
        $user_products = Product::where("restaurant_id", $restaurant)->get();
        $products = Product::select("id")->where('restaurant_id', $restaurant)->first();
        if (!$user_products->contains($product)) {
            return view("errors.product");
        }
        return view("admin.products.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $restaurant = DB::table('restaurants')->where('user_id', Auth::id())->value("id");
        $user_products = Product::where("restaurant_id", $restaurant)->get();
        $products = Product::select("id")->where('restaurant_id', $restaurant)->first();
        if (!$user_products->contains($product)) {
            return view("errors.product");
        }
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
        if ($product->image) {
            Storage::disk("public")->delete($product->image);
        }

        //Cancella immagine dalla cartella storage/app/public/uploads

        //Storage::disk("public")->delete('/uploads', $product['image']);
        $product->delete();

        return redirect()->route("admin.products.index");
    }
}
