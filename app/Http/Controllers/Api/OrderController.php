<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Braintree\Gateway;
use App\Models\Order;

class OrderController extends Controller
{
    public function getToken()
    {
        $gateway = new Gateway([
            'environment' => "sandbox",
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.public_key'),
            'privateKey' => config('services.braintree.private_key')
        ]);

        $token = $gateway->clientToken()->generate();

        return response()->json(['token' => $token]);
    }

    public function processPayment(Request $request)
    {

        // Qui gestisci il pagamento con Braintree come fai già

        // Simulazione di un pagamento fittizio con Braintree
        $result = new \stdClass();
        $result->success = true; // Simula un pagamento riuscito
        // Fine simulazione

        if ($result->success) {
            return response()->json(['success' => true, 'message' => 'Payment successful']);
        } else {
            return response()->json(['success' => false, 'message' => 'Payment failed']);
        }
    }





    public function processOrder(Request $request)
    {
        $order = new Order();
        $order->name = $request->name;
        $order->surname = $request->surname;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->notes = $request->notes;
        $order->paid = true; // Presumo che il pagamento sia stato completato
        $order->total = $request->total; // Totale dell'ordine
        $order->save();

        return response()->json(['success' => true, 'message' => 'Order successful']);
    }
}
