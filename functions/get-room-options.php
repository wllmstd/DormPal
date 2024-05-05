<?php
include_once 'connection.php';

// Ensure there's a type to search for
if (!isset($_POST['type'])) {
    echo "No type provided!";
    exit;
}

$roomType = $_POST['type'];

// Prepare and execute the query
$sql = 'SELECT r.id, r.type, r.pax, r.rent, COALESCE(COUNT(b.room), 0) AS occupied
        FROM rooms r
        LEFT JOIN boarders b ON r.id = b.room
        WHERE r.type = :type
        GROUP BY r.id';

$stmt = $db->prepare($sql);
$stmt->bindParam(':type', $roomType);

// Execute and check for errors
if (!$stmt->execute()) {
    echo "An error occurred.";
    exit;
}

$rooms = $stmt->fetchAll();

// Check if there are any rooms fetched
if (!$rooms) {
    echo "No rooms found for this type.";
    exit;
}

// Generate options for dropdown menu only if slots are available
foreach ($rooms as $room) {
    $availableSlots = $room['pax'] - $room['occupied'];
    if ($availableSlots > 0) {
        echo '<option value="' . $room['id'] . '">Room #' . $room['id'] . ' - ' . $room['type'] . ' - ₱' . number_format($room['rent'], 2) . ' | Slots Available: ' . $availableSlots . '</option>';
    }
}
?>
