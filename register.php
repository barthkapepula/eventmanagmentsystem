<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="resource/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="resource/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="resource/assets/css/style.css" rel="stylesheet">

    <style>
    .rounded-rectangle-button {
        background-color: #2b3990;;
        color: #fff;
        border: none;
        border-radius: 10px; /* Adjust this value to control the roundness of the corners */
        padding: 10px 15px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Style the button on hover */
    .rounded-rectangle-button:hover {
        background-color: #0056b3;
    }
</style>



    <title>Registration</title>
</head>
<body>
<?php
// Define database connection details
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "ems";

// Initialize variables to store user input
$email = "";
$password = "";
$confirmPassword = "";
$username = "";
$fullname = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $username = $_POST["username"];
    $fullname = $_POST["fullname"];

    // Validate user input
    $errors = array();

    if (empty($email)) {
        $errors[] = "Email is required";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match";
    }

    // If there are no validation errors, you can proceed with database operations
    if (empty($errors)) {
        // Create a database connection
        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if the "users" table exists and create it if not
        $checkTableQuery = "SELECT 1 FROM users LIMIT 1";
        $tableExists = mysqli_query($conn, $checkTableQuery);

        if (!$tableExists) {
            // Table doesn't exist, create it with username and fullname fields
            $createTableQuery = "CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL,
                username VARCHAR(255),
                fullname VARCHAR(255),
                password VARCHAR(255) NOT NULL
            )";

            if (mysqli_query($conn, $createTableQuery)) {
                echo "Table 'users' created successfully.<br>";
            } else {
                echo "Error creating table: " . mysqli_error($conn) . "<br>";
            }
        }

        // Insert user data into the database (you should use prepared statements to prevent SQL injection)
        $sql = "INSERT INTO users (email, username, fullname, password) VALUES ('$email', '$username', '$fullname', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        // Display validation errors
        echo "<div class='error'>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        echo "</div>";
    }
}
?>
<section class="form-02-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="_lk_de">
                    <div class="form-03-main">
                        <div class="logo">
                            <img src="resource/assets/images/user.png">
                        </div>
                        <form method="post" action="facilities.php">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control _ge_de_ol" placeholder="Enter Username"
                                       required aria-required="true" value="<?php echo $username; ?>">
                            </div>

                            <div class="form-group">
                                <input type="text" name="fullname" class="form-control _ge_de_ol" placeholder="Enter Full Name"
                                       required aria-required="true" value="<?php echo $fullname; ?>">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control _ge_de_ol" placeholder="Enter Email"
                                       required aria-required="true" value="<?php echo $email; ?>">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control _ge_de_ol" placeholder="Enter Password"
                                       required aria-required="true" value="<?php echo $password; ?>">
                            </div>

                            <div class="form-group">
                                <input type="password" name="confirmPassword" class="form-control _ge_de_ol" placeholder="Confirm Password"
                                       required aria-required="true" value="<?php echo $confirmPassword; ?>">
                            </div>

                            <div class="form-group">
                            <div class="form-group">
                           <div class="_btn_04">
                           <input type="submit" value="Create account" class="rounded-rectangle-button">
                      </div>
                    </div>

                        </form>
                        <p>Already have an account? <a href="login.php"><b>Login</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
