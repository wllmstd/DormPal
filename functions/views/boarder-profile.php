<?php
include_once 'functions/connection.php';

$id = $_GET['id'];  // Get the boarder's ID from the URL query parameter

$sql = 'SELECT b.*, r.rent FROM `boarders` b
        INNER JOIN `rooms` r ON b.room = r.id
        WHERE b.id = :boarder_id';  // Use a placeholder for the boarder's ID
$stmt = $db->prepare($sql);
$stmt->bindParam(':boarder_id', $id, PDO::PARAM_INT);  // Bind the actual boarder's ID to the placeholder
$stmt->execute();
$results = $stmt->fetch();  // Use fetch() to get a single record

$fullname = $results['fullname'];
$phone = $results['phone'];
$address = $results['address'];
$room = $results['room'];
$rent = $results['rent'];
$type = $results['type'];
$profile_picture = $results['profile_picture'];
$proof_of_identity = $results['proof_of_identity'];

?>
