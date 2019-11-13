<?php include_once('checkUser.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="../css/login.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <script src="../src/login.js"></script>

</head>

<body>

    <div id="navbar">
        <a href="home.html">Home</a>
        <a href="leaderboard.html">Leaderboard</a>
        <a href="FAQ.html">FAQ</a>
        <a href="about.html">About</a>
        <img src="../images/logo.png" height="45" style="float: right" />
    </div>

    <form action="../cgi-bin/login.php" method="POST" id="login-form">
        <?php include('errors.php');?>
        <div id="login" class="form-layout">
            <h1>
                <label class="txt-white heading">Login</label>
            </h1>
            <br>
            <div class="lbl">
                <label class="txt-white">Username</label>
                <br>
                <input type="text" id="username" class="tb" placeholder="username" />
            </div>
            <br>
            <div class="lbl">
                <label class="txt-white">Password</label>
                <br>
                <input type="password" id="password" name="password" class="tb" placeholder="Password"
                    class="general-text">
            </div>
            <br>
            <input type="submit" value="LOGIN" name="login" class="general-button">
        </div>

    </form>
</body>

</html>