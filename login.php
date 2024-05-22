
<html>
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="Images/icon.png" />
    <link rel="stylesheet" href="indexstyle.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
</head>

<title>Index</title>

<body>
        
    <div class="container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <h2>Log In</h2>

            <div class="row">
                <div class="col-25"><label>Username</label></div>
                <div class="col-75"><input type="text" name="username" placeholder="Name"></div>
            </div>

            <div class="row">
                <div class="col-25"><label>Password</label></div>
                <div class="col-75"><input type="password" name="pass" placeholder="Password"></div>
            </div>

            <div class = "row">
            <?php

                if(isset($_POST['submit'])){
                    include "connect.php";

                    if ($_POST['username'] == $dbusername && $_POST['pass'] == $dbpass)
                    {
                        header("Location: Home.php");
                    }
                    else echo '<p style="color:red; position:center;">
                                Wrong username or password!</p>';

                }
                ?>
            </div>
            <div class="row">
                <input type="submit" name="submit" value="Submit" />
            </div>
        </form>
    </div>
</body>
</html>


