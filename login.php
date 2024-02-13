<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        /* Basic styling for the form container */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style the form labels */
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            color: #fff;
        }

        /* Style the input fields */
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Style the submit button */
        input[type="submit"] {
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* Style the submit button on hover */
        input[type="submit"]:hover {
            background: #0056b3;
        }

        /* Style hyperlinks */
        a {
            color: #007BFF;
            text-decoration: none;
        }

        /* Add spacing for form sections */
        form > * {
            margin-bottom: 10px;
        }

        h1 {
            text-align: center;
        }

        .create-account-link {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <form action="authenticate.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
        <div class="create-account-link">
            <p>Don't have an account? <a href="signup.php">Create one</a></p>
            <p><a href="forgot_password.php">Forgot Password?</a></p>
        </div>
    </form>
</body>

</html>
