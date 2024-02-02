<h1>
    <div class="navigator" style="text-align: center;">
        <span class="center" style="text-align: center;">
            <div class="center logo brightness"><img src="../src/logo.png" class="logo center" onclick="window.location.href='https://radicallettuce.com/' "></div>
            <p class="center">Radical Lettuce</p>
            <button class="button disabled" disabled="true" onclick="window.location.href='https://radicallettuce.com/login_system/register.php';">
                <P>Lettuce Account (coming soon)</P>
            </button>
            <button class="button game1"  onclick="window.location.href='https://radicallettuce.com/untitled-lettuce/';">
                <P>[BETA] Untitled Lettuce Remastered</P>
            </button>
            <button class="button disabled" disabled="true" onclick="window.location.href='https://radicallettuce.com/media-player/';">
                <P>Radical Jukebox</P>
            </button>
            <button class="button disabled" disabled="true" onclick="window.location.href='https://radicallettuce.com/game?not-announced/';">
                <P>Lightbulb Joyride</P>
            </button>
        </span>
    </div>
    
</h1>
<div class="endofpage center">
    <p style=>Radical Lettuce LLC<br>Our Team:</p>
    <div id="footer-text" animation-iteration-count: infinite; style="text-align: center;"><p id="pulsing center"></p></div>
    <button class="button button2" onclick="window.location.href='https://www.youtube.com/@radicallettuce3114';">
        <img src="../src/yt.png" style="width: 60px; height: 40px;">
    </button>
    <button class="button button3"  onclick="window.location.href='https://github.com/xnoahg/Radical-Lettuce'">
        <img src="../src/github.png" style="width: 40px; height: 40px;"></img>
    </button>
    <a class="center" href='#/' id='trig1'><button class="button button1" onclick="window.location.href='https://discord.gg/Z6u75A6tA6';">
        <img src="../src/discord.png" style="width: 40px; height: 40px;">
    </button></a>
    <iframe class="center" id='ifrm1' name='ifrm1' src="https://discord.com/widget?id=1083276910169182268&theme=dark" width="280" height="320" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
</div>

<form action="login.php" method="post">


  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required id="username">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required id="password">

    <input name="login" type="submit" value="Login" />
  </div>
</form>
<link rel="stylesheet" href="../index.css">

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
