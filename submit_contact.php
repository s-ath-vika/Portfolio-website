<?php
// Require the established database connection wrapper
require('db_connect.php'); // satisfies the require() use case requirement

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and trim input values from the $_POST array
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Server-side baseline check validation fallback
    if (empty($name) || empty($email) || empty($message)) {
        echo "Error: All form fields are strictly required.";
        exit;
    }

    // Prepare secure insertion query framework using Prepared Statements to block SQL injections
    $query = "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        // Bind parameters safely ("sss" signifies string data arguments mapping sequence)
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
        
        // Execute the statement locally
        if (mysqli_stmt_execute($stmt)) {
            echo "success";
        } else {
            echo "Error saving message: " . mysqli_error($conn);
        }
        
        // Close statements to clear operational streams
        mysqli_stmt_close($stmt);
    }
}

// Close active server link footprint
mysqli_close($conn);
?>