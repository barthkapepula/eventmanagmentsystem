<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $facilityCategory = $_POST['facilityCategory'];
    $facility = $_POST['facility'];
    $reservation_date = $_POST['reservation_date'];
    $email = $_POST['email'];

    // Check for empty fields or any additional validation

    // Connect to the database (adjust the connection details)
    $conn = new mysqli('localhost', 'root', '', 'ems');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert booking information into the database
    $sql = "INSERT INTO bookings (facilityCategory, facility, reservation_date, email) VALUES ('$facilityCategory', '$facility', '$reservation_date', '$email')";

    if ($conn->query($sql) === TRUE) {
        // Booking successfully saved to the database

        // Send a confirmation email (configure your email settings)

        // Redirect to a thank you page
        header('Location: thank_you.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
