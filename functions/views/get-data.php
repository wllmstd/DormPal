<?php
include_once 'functions/connection.php';

function room_lists(){
    global $db;
    $sql = 'SELECT * FROM rooms';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
        $roomId = $row['id'];
        $roomType = $row['type']; // Added room type
        $roomPax = $row['pax'];
        $roomRent = $row['rent'];
        $sql = 'SELECT COUNT(*) AS boarders_count FROM boarders WHERE room = :roomId';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':roomId', $roomId);
        $stmt->execute();
        $boardersCount = $stmt->fetchColumn();
        $available = $roomPax - $boardersCount;
        if ($roomPax > $boardersCount) {
            ?>
            <option value="<?php echo $roomId; ?>">Room #<?php echo $roomId; ?> - <?php echo $roomType; ?> - ₱<?php echo $roomRent; ?> | Slot: <?php echo $available; ?></option>
            <?php
        }
    }
}
?>
