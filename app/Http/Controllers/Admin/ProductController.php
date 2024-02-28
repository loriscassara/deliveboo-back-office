<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Salvo id ristorante che ha come "user_id" l'utente attualmente loggato. con "get()" non funge con first sì (W3School)
        $restaurant = Restaurant::select('id')->where('user_id', Auth::id())->first();
        $products = Product::all()->where("restaurant_id", $restaurant->id);


        return view("admin.products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


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
        $newProduct = new Product();
        //ricordate che per usare il fill bisogna popolare fillable nel model
        //altrimenti alcuni dati non verranno scritti ;)

        $newProduct->fill($data);
        $newProduct->save();
        $request->restaurant_id;
        $newProduct->restaurant()->associate($request->restaurant_id);


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
        if ($product->image) {
            Storage::disk("public")->delete($product->image);
        }

        //Cancella immagine dalla cartella storage/app/public/uploads

        //Storage::disk("public")->delete('/uploads', $product['image']);
        $product->delete();

        return redirect()->route("admin.products.index");
    }
}
