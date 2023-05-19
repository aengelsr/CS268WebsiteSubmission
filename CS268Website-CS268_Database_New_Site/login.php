<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include the database connection file
require_once 'connect.php';

// Get the email and password from the login form
$email = $_POST['email'];
$pass = $_POST['pass'];

// Prepare the SQL statement to select the user with the given email and password
$stmt = $con->prepare("SELECT * FROM users WHERE email = ? AND pass = ?");
$stmt->bind_param("ss", $email, $pass);
$stmt->execute();

// Check if a matching user was found
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    // User credentials are valid, redirect to the dashboard or another page
    echo "<script>
    var confirmAlert = confirm('Logged in successfully, press OK to continue.');
    if (confirmAlert == true) {
        // Redirect to a different page
        window.location.href = 'http://localhost:8080/CS268Website-CS268_Database_New_Site/create-user.php';
    } else {
        window.location.href = 'http://localhost:8080/CS268Website-CS268_Database_New_Site/create-user.php';
    }
  </script>";
} else {
    // Invalid credentials, display an error message or redirect to a login failure page
    echo "Invalid email or password";
}

$stmt->close();
$con->close();
?>


