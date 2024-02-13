<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
/* Basic styling for the form container */
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style the form labels */
label {
    display: block;
    font-weight: bold;
    margin-top: 10px;
}

/* Style the input fields */
input[type="text"],
input[type="email"],
input[type="password"],
input[type="date"] {
    width: 90%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Style the submit button */
input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 15px;
    cursor: pointer;
}

/* Style the submit button on hover */
input[type="submit"]:hover {
    background-color: green;
}

/* Add spacing for form sections */
form > * {
    margin-bottom: 10px;
}


    </style>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="register.php" method="POST">
        <label>First Name:</label>
        <input type="text" name="first_name" required><br>
        
        <label>Last Name:</label>
        <input type="text" name="last_name" required><br>
        
        <label>Email:</label>
        <input type="email" name="email" required><br>
        
        <label>Date of Birth:</label>
        <input type="date" name="date_of_birth" required><br>
        
        <label>Password:</label>
        <input type="password" name="password" required><br>
        
        <label>Confirm Password:</label>
        <input type="password" name="confirm_password" required><br>
        
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
