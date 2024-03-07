<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $results = Restaurant::with('types')->get();
        $data = [
            "success" => true,
            "payload" => $results
        ];
        return response()->json($data);
    }

    public function show($id)
    {
        $event = Restaurant::with(['products', "types"])->find($id);
        return response()->json([
            "success" => $event ? true : false,
            "payload" => $event ? $event : "Nessun evento corrispondente all'id"
        ]);
    }
}
