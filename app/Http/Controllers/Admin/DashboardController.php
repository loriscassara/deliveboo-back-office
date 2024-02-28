<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $restaurant = Restaurant::select('id')->where('user_id', Auth::id())->first();
        $products = Product::all()->where("restaurant_id", $restaurant->id);

        return view('admin.dashboard', compact("restaurant", "products"));
    }
}
