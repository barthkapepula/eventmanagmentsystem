<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Define database connection details
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "ems";

    // Create a database connection
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch user data from the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verify the password (you should use password_verify with hashed passwords)
        if ($row["password"] == $password) {
            // Authentication successful, store user ID in the session
            $_SESSION['user_id'] = $row['id'];

            // Redirect to facilities.php
            header('Location: facilities.php');
            exit();
        } else {
            // Incorrect password
            echo "Incorrect password";
        }
    } else {
        // User not found
        echo "User not found";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
<!doctype html>
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
    <title>Login/Registration</title>
  </head>
  <body>
    <section class="form-02-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <img src="resource/assets/images/user.png">
                </div>
                <form method="post" action="">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required aria-required="true">
                  </div>

                  <div class="form-group">
                    <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required aria-required="true">
                  </div>

                  <div class="checkbox form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="">
                      <label class="form-check-label" for="">
                        Remember me
                      </label>
                    </div>
                    <a href="#">Forgot Password</a>
                  </div>

                  <div class="form-group">
                  <div class="_btn_04">
                           <input type="submit" value="Log in" class="rounded-rectangle-button">
                      </div>
                </form>

                <a href="register.php">Create a new account</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
