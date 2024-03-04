<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $results = Restaurant::all();
        $data = [
            "success" => true,
            "payload" => $results
        ];
        return response()->json($data);
    }

    public function show($id)
    {
        $event = Restaurant::with(['products'])->find($id);
        return response()->json([
            "success" => $event ? true : false,
            "payload" => $event ? $event : "Nessun evento corrispondente all'id"
        ]);
    }
}