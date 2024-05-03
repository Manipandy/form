<?php
// Check if form data is sent via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate form data (for server-side validation)
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Example processing (e.g., save to a database, send an email, etc.)
    echo "Thank you, $name! We have received your message.";
} else {
    echo "Invalid request method.";
}
?>
