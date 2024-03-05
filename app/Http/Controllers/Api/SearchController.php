<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Restaurant;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Type::all();
        $data = [
            "success" => true,
            "payload" => $results
        ];
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $types = Type::all();


        $choosenType = $request->types;

        $restaurants = Restaurant::all();
        $restaurantsArray = [];

        foreach ($restaurants as $restaurant) {
            foreach ($restaurant->types as $type) {
                if ($type->id == $choosenType) {
                    array_push($restaurantsArray, $restaurant);
                }
            }
        }
        return response()->json([
            "success" => $restaurantsArray ? true : false,
            "payload" => $restaurantsArray ? $restaurantsArray : "Nessun evento corrispondente all'id"
        ]);
    }
}
