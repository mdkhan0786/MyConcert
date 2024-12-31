<?php

require 'vendor/autoload.php'; // Include the Stripe PHP library

\Stripe\Stripe::setApiKey('sk_test_your_secret_key');  // Replace with your secret key

// Create a Checkout session
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Create a new Stripe Checkout session
        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Test Item',
                        ],
                        'unit_amount' => 1000, // Amount in cents (1000 = $10)
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => 'http://localhost/success.php', // Redirect after successful payment
            'cancel_url' => 'http://localhost/cancel.php',   // Redirect if payment is canceled
        ]);

        // Send the session ID back to the client
        echo json_encode(['id' => $checkout_session->id]);

    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
