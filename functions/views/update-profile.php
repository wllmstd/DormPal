<?php
include 'connection.php';

// Start the session or ensure user authentication here if necessary

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize POST data
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $new_password = $_POST['new_password']; // You should hash this password before storing

    // Handle Profile Photo Upload
    $profile_photo = $_FILES['profile_photo']['name'];
    $target_dir = "uploads/"; // Specify the directory where you want to store uploaded profile photos
    $target_file = $target_dir . basename($_FILES["profile_photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["profile_photo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }

    // Assume $userId is retrieved from session or a hidden form field
    $userId = $_SESSION['userId'] ?? null; // Example usage

    // SQL to update user profile
    if (!empty($new_password)) { // Only update password if field is not empty
        $new_password = password_hash($new_password, PASSWORD_DEFAULT); // Hash new password
        $sql = "UPDATE users SET fullname=?, email=?, phone=?, address=?, password=?, profile_photo=? WHERE id=?";
        $params = [$fullname, $email, $phone, $address, $new_password, $profile_photo, $userId];
    } else {
        $sql = "UPDATE users SET fullname=?, email=?, phone=?, address=?, profile_photo=? WHERE id=?";
        $params = [$fullname, $email, $phone, $address, $profile_photo, $userId];
    }
    
    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    if ($stmt->rowCount()) {
        // Redirection to the account page on success
        header("Location: /Dormi/account.php"); // Adjust if your directory structure is different
        exit;
    } else {
        // Handle error or no update scenario
        echo "Failed to update the profile. Please try again.";
    }
} else {
    // Redirect back or show an error if accessed directly
    header("Location: /Dormi/account.php");
    exit;
}
?>
