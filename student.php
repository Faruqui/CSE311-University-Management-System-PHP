<?php
    include "Include/header.php";

?>

<title>Students</title>

<body>

    <div class="row">

    <div class="column side">
        <div class="sidenav">
            <a href="student.php">All Students</a>
            <a href="studentq1.php">Course History</a>
            <a href="studentq2.php">Grade History</a>
            <a href="#clients">Class Inforamtion</a>
        </form>
    </div>  

    </div>

    <div class="column middle">
        <h2>All Students' List</h2>
            <?php
            $sql = "SELECT * FROM students
            ORDER BY id";

            include "tableprint.php";
            printTable($sql, $conn);
            ?>
        </table>
        <br><br>
    </div>

    <div class="column side">            
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div><input type="number" name="id" placeholder="Student ID"></div>
            <input type="submit" name="submit" value="DELETE" style = "color:red;"/>
        </form>
    </div>  
</div>
</body>


<?php

if(isset($_POST['submit'])){
    include "connect.php";

    $sql = "DELETE FROM students WHERE ID = ".$_POST['id'];

    $query = mysqli_query($conn, $sql);

    //echo $_POST['department'];

    if($query) echo "|>                                 Student Deleted! Refesh Page";
    else echo "ERROR! Missing fields ".mysqli_error($conn);
    //header("url=student.php");
}
?>
</html>