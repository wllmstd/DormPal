<?php
include_once 'connection.php';

// Map the incoming POST value to the corresponding database value
$type_map = [
    'Bedspacer' => 'Bedspacer',
    'Regular' => 'Regular'
];

// Check if the incoming POST type exists in the mapping array
if(isset($_POST['type']) && isset($type_map[$_POST['type']])) {
    $type = $type_map[$_POST['type']];
} else {
    // Default to 'regular' if the incoming type is not recognized
    $type = 'regular';
}

$pax = $_POST['pax'];
$rent = $_POST['rent'];

$sql = "INSERT INTO rooms (type, pax, rent) VALUES (:type, :pax, :rent)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':pax', $pax);
$stmt->bindParam(':rent', $rent);
$stmt->execute();

generate_logs('Adding Room', $type . '|' . $pax . '| Room was added successfully');
header('Location: ../rooms.php?type=success&message=Room was added successfully');
?>
