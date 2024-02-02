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

<form action="register.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="username">Username:</label> 
    <input id="username" name="username" required type="text" />

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>


    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input name="register" type="submit" value="Register" />

  </div>

  <div class="container signin">
    <p>Already have an account? <a href="https://radicallettuce.com/login_system/login.php">Sign in</a>.</p>
  </div>

</form>
<link rel="stylesheet" href="../index.css">

<?php if (isset($_POST['register'])) { 
include 'connect.php';

// Connect to the database 
$mysqli = new mysqli("localhost", "username", "password", "login_system"); 

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

