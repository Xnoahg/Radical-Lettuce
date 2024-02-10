
<!DOCTYPE html>
<html>
<head>
    <!-- favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="./src/favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./src/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./src/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./src/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="./src/favicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="./src/favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="./src/favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="./src/favicons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="./src/favicons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="./src/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="./src/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./src/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="./src/favicons/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <!-- rich embed -->
    <title>Radical Lettuce</title>
    <meta content="Radical Lettuce" property="og:title" />
    <meta content="The official website for the Radical Lettuce development group. Current memebers include: FireBlaster69, Esburger, & Wawaboy27 (aka Wawaboy26)" property="og:description" />
    <meta content="https://radicallettuce.com" property="og:url" />
    <meta content="https://radicallettuce.com/src/logo.png" property="og:image" />
    <meta content="#2ac307" data-react-helmet="true" name="theme-color" />
    <!-- CSS -->
    <link rel="stylesheet" href="index.css">
</head>
<title>Radical Lettuce</title>
<h1>
    
    <div class="navigator" style="text-align: center;">
        <span class="center" style="text-align: center;">
            <div class="center logo brightness"><img src="./src/logo.png" class="logo center" onclick="window.location.href='https://radicallettuce.com/' "></div>
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
        <p id="username" class="center uname-readout"></p>
    </div>
    
</h1>
<body>
    
<div class="loading">
    <img src="./src/loading.gif" alt="loading" class="loading"> 
    <div id="loading-text" animation-iteration-count: infinite;><p id="pulsing"></p></div>
</div>



<div class="endofpage center">
    <p style=>Radical Lettuce LLC<br>Our Team:</p>
    <div id="footer-text" animation-iteration-count: infinite; style="text-align: center;"><p id="pulsing center"></p></div>
    <button class="button button2" onclick="window.location.href='https://www.youtube.com/@radicallettuce3114';">
        <img src="./src/yt.png" style="width: 60px; height: 40px;">
    </button>
    <button class="button button3"  onclick="window.location.href='https://github.com/xnoahg/Radical-Lettuce'">
        <img src="./src/github.png" style="width: 40px; height: 40px;"></img>
    </button>
    <a class="center" href='#/' id='trig1'><button class="button button1" onclick="window.location.href='https://discord.gg/Z6u75A6tA6';">
        <img src="./src/discord.png" style="width: 40px; height: 40px;">
    </button></a>
    <iframe class="center" id='ifrm1' name='ifrm1' src="https://discord.com/widget?id=1083276910169182268&theme=dark" width="280" height="320" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
</div>


</body>
<script type="text/javascript" src="index.js"></script>
</html>



<script type="text/javascript">
var uname="<?php echo $_SESSION['username']; ?>";
if (uname == '') {
    document.getElementById('username').innerHTML = " You're not logged in.";
} else {
    document.getElementById('username').innerHTML = "Hello " + uname;
}
</script>

<?php

if (isset($_SESSION['auth'])) {

    header("Location: home");
    exit();
}
else {

    header("Location: login");
    exit();
}


?>