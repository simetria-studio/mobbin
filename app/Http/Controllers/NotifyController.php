<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NotifyController extends Controller
{
    public function webhook()
    {

        $secret_key = 'jfuw15y8nn9';
        // receive order's data
        $payload = @file_get_contents('php://input');
        $order = json_decode($payload, true);

        // verify signature
        $signature = isset($_GET['signature']) ? trim($_GET['signature']) : '';
        $calculatedSignature = hash_hmac('sha1', json_encode($order), $secret_key);


        \Log::info([$order['order_id'], $order['order_status'], $order['Customer']['email']]);

        // if ($signature !== $calculatedSignature) {
        //     http_response_code(400);
        //     header('Content-Type: application/json');
        //     echo json_encode(['error' => 'Incorrect signature']);
        //     exit();
        // }

        $user = User::where('email', $order['Customer']['email']);
        \Log::info($user->get());
        $user->update([
            'order_id' => $order['order_id'],
            'permission' => $order['order_status'] == 'paid' ? 5 : 0,
        ]);
        // do any job with received order's data

        http_response_code(200);
        header('Content-Type: application/json');
        echo json_encode(['status' => 'ok']);
    }
}
