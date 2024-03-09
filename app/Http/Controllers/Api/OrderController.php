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
        $total = $request->total;

        $gateway = new Gateway([
            'environment' => "sandbox",
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.public_key'),
            'privateKey' => config('services.braintree.private_key')
        ]);

        // Simulazione di un pagamento fittizio con Braintree
        $result = new \stdClass();
        $result->success = true; // Simula un pagamento riuscito
        // Fine simulazione

        if ($result->success) {
            // Salva l'ordine nel database
            $order = new Order();
            // Popola i campi dell'ordine con i dati dal form del frontend
            $order->name = $request->name;
            $order->surname = $request->surname;
            $order->phone = $request->phone;
            $order->email = $request->email;
            $order->address = $request->address;
            $order->notes = $request->notes;
            $order->paid = true; // Presumo che il pagamento sia stato completato
            $order->total = $total; // Totale dell'ordine
            // Aggiungi eventuali altre informazioni sull'ordine, ad esempio lo stato del pagamento
            $order->save();
            return response()->json(['success' => true, 'message' => 'Payment successful']);
        } else {
            return response()->json(['success' => false, 'message' => 'Payment failed']);
        }
    }
}
