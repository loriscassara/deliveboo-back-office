<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Type;
use Braintree\Gateway;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

   
    public function index()
    { {
            $types = Type::with('restaurants')->get();
            $data = [
                "success" => true,
                "results" => $types
            ];
            return response()->json($data);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            // Validazione dei dati
            $validatedData = $request->validate([
                'name' => 'required|string',
                'surname' => 'required|string',
                'phone' => 'required|numeric',
                'email' => 'required|email',
                'address' => 'required|string',
                'notes' => 'nullable|string',
                'total' => 'required|numeric',
                'paid' => 'required|',
                // 'restaurant_id' => 'required|exists:restaurants,id', 
                'products' => 'required|array',
                'products.*.id' => 'required|exists:products,id',
                'products.*.item_quantity' => 'required|integer|min:1',
            ]);

            // Crea un nuovo ordine
            $order = new Order();
            $order->name = $validatedData['name'];
            $order->surname = $validatedData['surname'];
            $order->phone = $validatedData['phone'];
            $order->email = $validatedData['email'];
            $order->address = $validatedData['address'];
            $order->notes = ($validatedData['notes'])? $validatedData['notes']:" ";
            $order->total = $validatedData['total'];
            $order->paid = $validatedData['paid'];



            $order->save();

            // Aggiungi i prodotti all'ordine
            foreach ($validatedData['products'] as $product) {
                $order->products()->attach($product['id'], ['item_quantity' => $product['item_quantity']]);
            }

            // Ritorna una risposta JSON per confermare l'avvenuto salvataggio dei dati
            return response()->json(['message' => 'Ordine creato con successo'], 200);
        }

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
