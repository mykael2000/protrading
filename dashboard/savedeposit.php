<?php
session_start();
// Include your header, which should contain your database connection ($conn)
include('header.php');

// Define the upload directory
$upload_dir = 'uploads/proofs/'; 

// Ensure the directory exists and is writable
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Check if the form was submitted correctly
if (isset($_POST['amount'], $_POST['payment_method']) && isset($_FILES['proof'])) {
    
    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("location: login.php");
        exit();
    }
    $user_id = $_SESSION['user_id'];

    // Sanitize and get form data
    $amount = filter_var($_POST['amount'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $payment_method = htmlspecialchars($_POST['payment_method']);
    
    // Handle file upload errors
    if ($_FILES['proof']['error'] !== UPLOAD_ERR_OK) {
        $error_message = "File upload failed with error code: " . $_FILES['proof']['error'];
        header("location: payment.php?status=error&message=" . urlencode($error_message));
        exit();
    }
    
    // File validation: check type and size
    $allowed_file_types = ['image/jpeg', 'image/png', 'application/pdf'];
    $max_file_size = 5 * 1024 * 1024; // 5 MB

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $file_type = finfo_file($finfo, $_FILES['proof']['tmp_name']);
    finfo_close($finfo);

    if (!in_array($file_type, $allowed_file_types) || $_FILES['proof']['size'] > $max_file_size) {
        header("location: payment.php?status=error&message=" . urlencode("Invalid file. Please upload a JPG, PNG, or PDF file no larger than 5MB."));
        exit();
    }

    // Generate a unique filename
    $extension = pathinfo($_FILES['proof']['name'], PATHINFO_EXTENSION);
    $unique_filename = uniqid('proof_', true) . '.' . $extension;
    $destination_path = $upload_dir . $unique_filename;

    // Move the uploaded file
    if (move_uploaded_file($_FILES['proof']['tmp_name'], $destination_path)) {
        
        // Insert into database
        $sql = "INSERT INTO deposits (user_id, amount, payment_method, proof_path, status) VALUES (?, ?, ?, ?, 'pending')";
        
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("idss", $user_id, $amount, $payment_method, $destination_path);
            
            if ($stmt->execute()) {
                // Success! Redirect to the payment page with a success message
                header("location: payment.php?status=success&message=" . urlencode("Your deposit request has been submitted successfully. It is now pending review."));
                exit();
            } else {
                // DB error, delete the file and redirect
                unlink($destination_path);
                header("location: payment.php?status=error&message=" . urlencode("Error submitting deposit: " . $stmt->error));
                exit();
            }
            $stmt->close();
        } else {
            // DB statement failed, redirect
            header("location: payment.php?status=error&message=" . urlencode("Database error: " . $conn->error));
            exit();
        }

    } else {
        // Failed to move file, redirect
        header("location: payment.php?status=error&message=" . urlencode("There was an error uploading your proof of payment. Please try again."));
        exit();
    }

} else {
    // If the form wasn't submitted correctly, redirect back
    header("location: deposits.php?status=error&message=" . urlencode("Invalid form submission."));
    exit();
}
?>