<?php
    include "Include/header.php";
?>

<?php 
    include "connect.php";
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        $sql = "
            SELECT * 
                FROM teachers t
                LEFT JOIN experience e USING(id)
                LEFT JOIN publications p ON p.tid = t.id
            WHERE id = $id LIMIT 1";

        $result = mysqli_query($conn, $sql);

        $teacher = mysqli_fetch_assoc($result);

        // print_r($teacher);
    }
?>

<title>Teachers Details</title>

<body>
    <div class="row">
        <div class="column side">
            <div class="sidenav">
                <a href="teacher.php">All Teachers</a>
                <a href="teacher1.php">Course History</a>
                <a href="teacher2.php">Job Experience</a>
                <a href="teacher3.php">Publications</a>
            </div>
        </div>

        <div class="column middle">

            <h2> <?php echo $teacher["name"] ?>'s Details</h2>

            <h3> General Information </h3>
            <h4>Name: <?php echo $teacher["name"] ?></h4> 
            <h4>Email: <?php echo $teacher["email"] ?></h4> 
            <h4>Mobile: <?php echo $teacher["mobile"] ?></h4> 
            <h4>Department: <?php echo $teacher["department"] ?></h4> 

            <h3> Teaching Experience </h3>
            <h4>Position: <?php echo $teacher["position"] ?></h4> 
            <h4>Organization: <?php echo $teacher["organization"] ?></h4> 
            <h4>From: <?php echo $teacher["tfrom"] ?></h4> 
            <h4>To: <?php echo $teacher["tto"] ?></h4> 

            <h3> Publications </h3>
            <h4>Title: <?php echo $teacher["title"] ?></h4> 
            <h4>Volume: <?php echo $teacher["volume"] ?></h4> 
            <h4>Year: <?php echo $teacher["year"] ?></h4> 

        </div>
</div>
</body>
</html>
