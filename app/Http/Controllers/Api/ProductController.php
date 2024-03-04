<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $results = Product::all();
        $data = [
            "success" => true,
            "payload" => $results
        ];
        return response()->json($data);
    }


    public function show($id)
    {
        $event = Product::with('restaurants')->find($id);
        return response()->json([
            "success" => $event ? true : false,
            "payload" => $event ? $event : "Nessun Prodotto trovato"
        ]);
    }
}
