<?php
include_once('connection.php'); // Ensure this path is correct

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $user_id = $_SESSION['id']; // Assuming the user's ID is stored in session

    // Fetch current user data
    $currentData = $db->prepare("SELECT fullname, email, address, phone, password FROM users WHERE id = ?");
    $currentData->execute([$user_id]);
    $data = $currentData->fetch(PDO::FETCH_ASSOC);

    $changes = [];
    if ($data['fullname'] !== $fullname) {
        $changes[] = "Fullname changed from {$data['fullname']} to $fullname";
    }
    if ($data['email'] !== $email) {
        $changes[] = "Email changed from {$data['email']} to $email";
    }
    if ($data['address'] !== $address) {
        $changes[] = "Address changed from {$data['address']} to $address";
    }
    if ($data['phone'] !== $phone) {
        $changes[] = "Phone changed from {$data['phone']} to $phone";
    }
    if (!password_verify($confirm_password, $data['password']) && $new_password === $confirm_password) {
        $changes[] = "Password changed";
    }

    if ($new_password == $confirm_password) {
        // Update the database
        $password_hash = password_hash($new_password, PASSWORD_DEFAULT); // Hashing the password
        $stmt = $db->prepare("UPDATE users SET fullname = ?, email = ?, address = ?, phone = ?, password = ? WHERE id = ?");
        $stmt->execute([$fullname, $email, $address, $phone, $password_hash, $user_id]);

        // Log each change
        foreach ($changes as $change) {
            generate_logs('Update Account', $change. '| Account Profile was updated successfully');
        }

        echo "Profile updated successfully.";
    } else {
        echo "Passwords do not match.";
    }
}
?>

