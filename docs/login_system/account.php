<?php session_start(); 
if (isset($_POST['login'])) { 
    echo "the sctipt ran :)";
    // Connect to the database 
    include_once 'connect.php';
    // Check for errors 
    // if ($mysqli->connect_error) { die("Connection failed: " . $mysqli->connect_error); } 

    // Prepare and bind the SQL statement 
    $stmt = $mysqli->prepare("SELECT id, password FROM users WHERE username = ?"); $stmt->bind_param("s", $username); 

    // Get the form data 
    $username = $_POST['username']; $password = $_POST['password']; 

    // Execute the SQL statement 
    $stmt->execute(); $stmt->store_result(); 

    // Check if the user exists 
    if ($stmt->num_rows > 0) { 

    // Bind the result to variables 
    $stmt->bind_result($id, $hashed_password); 

    // Fetch the result 
    $stmt->fetch(); 

    // Verify the password 
    if (password_verify($password, $hashed_password)) { 

    // Set the session variables 
    $_SESSION['loggedin'] = true; $_SESSION['id'] = $id; $_SESSION['username'] = $username; 

    // Redirect to the user's dashboard 
    header("Location: ../index.php"); exit; } else { echo "Incorrect password!"; } } else { echo "User not found!"; } 

    // Close the connection 
    $stmt->close(); $mysqli->close(); 
}

if (isset($_POST['register'])) { 
    echo "the sctipt ran :)";
    include_once 'connect.php';
    
    // Check for errors 
    if ($mysqli->connect_error) { die("Connection failed: " . $mysqli->connect_error); } 
    
    // Prepare and bind the SQL statement 
    $stmt = $mysqli->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)"); $stmt->bind_param("sss", $username, $email, $password); 
    
    // Get the form data 
    $username = $_POST['username']; $email = $_POST['email']; $password = $_POST['password']; 
    
    // Hash the password 
    $password = password_hash($password, PASSWORD_DEFAULT); 
    
    // Execute the SQL statement 
    if ($stmt->execute()) { echo "New account created successfully!"; } else { echo "Error: " . $stmt->error; } 
    
    // Close the connection 
    $stmt->close(); $mysqli->close(); }

    
