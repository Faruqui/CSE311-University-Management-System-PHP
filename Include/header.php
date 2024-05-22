
<html>

<script src="jquery.js"></script>

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="Images/icon.png" />
    <link rel="stylesheet" href="STYLE.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<div>
        <a href="Home.php"><img src="Images/lolo.jpg" style = "height: 200px; object-fit:horizontal;"></a>
</div>

<header>
    <div class="topnav">
        <a href="Home.php">Home</a>
        <a href="student.php">Students</a>
        <a href="teacher.php">Teachers</a>
        <a href="department.php">Departments</a>
        <a href="studentreg.php">Student Registration</a>
        <a href="teacherreg.php">Teacher Registration</a>
        <a href="sql.php">SQL</a>
        <a href="login.php" style="float:right;">Log Out</a>
        <a href="About.php" style="float:right;">About</a>
        <a href="contact.php" style="float:right;">Contact</a>
    </div>

</header>

<?php
include "Include/footer.php";
?>