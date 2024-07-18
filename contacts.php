<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 50px;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost"; // Your database server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "Karen"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";





    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>New record created successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    $conn->close();
}
?>

<div class="container form-container">
    <h2>Contact Us</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" placeholder="Enter your message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


