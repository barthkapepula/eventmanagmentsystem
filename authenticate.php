<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Replace with your database connection details
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'ems';

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch user data based on the provided email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        header('Location: booking_form.php'); // Redirect to the booking page
    } else {
        // Redirect to the signup page
        header('Location: signup.php');
    }
    
    $conn->close();
}
?>
