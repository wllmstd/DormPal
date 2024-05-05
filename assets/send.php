<?php

require_once __DIR__ . '/twilio-php-main/src/Twilio/autoload.php'; // Adjust the path as necessary

use Twilio\Rest\Client;

$sid = "ACab41b9b777113d545cbda7fd59553f43";
$token = "8da494880b3ba7a43f606c56d1c27f1f";

$client = new Client($sid, $token);

// Get the amount from the POST data
$amount = $_POST['amount'] ?? '';

// Construct the message including the amount
$body = "Good Day, Tenant!\n\nYour rent payment of ₱$amount.00 for this month has been successfully processed. Thank you for your timely payment!\n\n-DormPal Authorities";

try {
    // Create and send the SMS message
    $client->messages->create(
        '+639064691786', // Replace with your recipient's number
        [
            'from' => '+13133344253', // Your Twilio number
            'body' => $body
        ]
    );

    echo "Message sent!";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
