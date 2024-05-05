<?php

require_once __DIR__ . '/twilio-php-main/src/Twilio/autoload.php'; // Adjust the path as necessary

use Twilio\Rest\Client;

$sid = "AC89327b95ffebe894f2d0881bcf9375ad";
$token = "a2d0cde5b0a156813d45a78bba4497d1";

$client = new Client($sid, $token);

// Get the amount from the POST data
$amount = $_POST['amount'] ?? '';

// Construct the message including the amount
$body = "Good Day, Tenant!\n\nYour rent payment of ₱$amount.00 for this month has been successfully processed. Thank you for your timely payment!\n\n-DormPal Authorities";

try {
    // Create and send the SMS message
    $client->messages->create(
        '+639760488609', // Replace with your recipient's number
        [
            'from' => '+14026034712', // Your Twilio number
            'body' => $body
        ]
    );

    echo "Message sent!";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
