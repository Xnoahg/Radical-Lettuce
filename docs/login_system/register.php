<h1>
    <div class="navigator" style="text-align: center;">
        <span class="center" style="text-align: center;">
            <div class="center logo brightness"><img src="../src/logo.png" class="logo center" onclick="window.location.href='https://radicallettuce.com/' "></div>
            <p class="center">Radical Lettuce Online</p>
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

<form action="account.php" method="post" class="form">
  <div class="container center">
    <h1>Radical Lettuce Online Signup</h1>
    <p>Please fill in this form to create a Radical Lettuce Online account.</p>
    <hr>
    <label for="username">Username:</label> 
    <input id="username" name="username" required type="text" />
    <br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
    <br>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input name="register" type="submit" value="Register" />

  </div>

  <div class="container signin center">
    <p>Already have an account? <a href="https://radicallettuce.com/login_system/login.php">Sign in</a>.</p>
  </div>

</form>
<link rel="stylesheet" href="../index.css">

