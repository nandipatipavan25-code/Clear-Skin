<?php
/**
 * ClearSkin Dermatology Clinic - Process Appointment Form
 */

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize user inputs
    $name    = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $mobile  = isset($_POST['mobile']) ? htmlspecialchars(trim($_POST['mobile'])) : '';
    $concern = isset($_POST['concern']) ? htmlspecialchars(trim($_POST['concern'])) : '';
    $branch  = isset($_POST['branch']) ? htmlspecialchars(trim($_POST['branch'])) : 'Madhapur';
    $notes   = isset($_POST['notes']) ? htmlspecialchars(trim($_POST['notes'])) : '';

    // Validate required fields
    if (empty($name) || empty($mobile)) {
        header("Location: index.php?status=error&msg=Please+fill+all+required+fields");
        exit;
    }

    // In production, save to MySQL DB or send email via mail() or PHPMailer
    // For preview purposes, we simulate successful reception

    $success_message = "Thank you $name! Your appointment request for $concern has been received. Our team will call you at $mobile shortly.";
    
    // Redirect back to home with success parameter
    header("Location: index.php?status=success&msg=" . urlencode($success_message));
    exit;
} else {
    header("Location: index.php");
    exit;
}
