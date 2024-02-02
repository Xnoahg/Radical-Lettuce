<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required id="username">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required id="password">

    <input name="login" type="submit" value="Login" />
  </div>
</form>
<style>
        /* Bordered form */
    form {
    border: 3px solid #f1f1f1;
    }

    /* Full-width inputs */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    }

    /* Add a hover effect for buttons */
    button:hover {
    opacity: 0.8;
    }

    /* Extra style for the cancel button (red) */
    .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    }

    /* Center the avatar image inside this container */
    .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    }

    /* Avatar image */
    img.avatar {
    width: 40%;
    border-radius: 50%;
    }

    /* Add padding to containers */
    .container {
    padding: 16px;
    }

    /* The "Forgot password" text */
    span.psw {
    float: right;
    padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
    }
</style> 
<?php session_start(); if (isset($_POST['login'])) { 

// Connect to the database 
include 'connect.php';
// Check for errors 
if ($mysqli->connect_error) { die("Connection failed: " . $mysqli->connect_error); } 

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
header("Location: dashboard.php"); exit; } else { echo "Incorrect password!"; } } else { echo "User not found!"; } 

// Close the connection 
$stmt->close(); $mysqli->close(); }
