<?php
include_once 'connection.php';

$id = $_POST['id'];
$type = $_POST['type'];
$pax = $_POST['pax'];
$rent = $_POST['rent'];

// Update room details
$sqlUpdateRoom = "UPDATE rooms SET type = :type, pax = :pax, rent = :rent WHERE id = :id";
$stmtUpdateRoom = $db->prepare($sqlUpdateRoom);
$stmtUpdateRoom->bindParam(':type', $type);
$stmtUpdateRoom->bindParam(':pax', $pax);
$stmtUpdateRoom->bindParam(':rent', $rent);
$stmtUpdateRoom->bindParam(':id', $id);
$stmtUpdateRoom->execute();

generate_logs('Update Room', $type . '|' . $pax . '| Room was updated successfully');
header('Location: ../rooms.php?type=success&message=Room was updated successfully');
?>
