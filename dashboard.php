<?php
// Define an array with user credentials
$users = array(
    'user@example.com' => 'password123', // Email => Password
    // Add more users if needed
);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both email and password are provided
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        // Validate email (you may need to add more robust validation)
        $email = $_POST['email'];
        // Validate password (you may need to add more robust validation)
        $password = $_POST['password'];
        
        // Check if the provided email exists in the array
        if (array_key_exists($email, $users) && $users[$email] == $password) {
            // Authentication successful
            // Redirect the user to a dashboard or home page
            header("Location: dashboard.php");
            exit(); // Prevent further execution
        } else {
            // Authentication failed
            $error = "Invalid email or password";
        }
    } else {
        // Email or password is missing
        $error = "Please provide both email and password";
    }
}
?>