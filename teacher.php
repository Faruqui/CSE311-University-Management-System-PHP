<?php
    include "Include/header.php";
    
?>

<title>Teachers</title>

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

            <h2>All Teacher's List</h2>
            <table class="center">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Room</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Department</th>
                <th>Details</th>
                
            </tr>

            <?php
            include "connect.php";
            $sql = "SELECT * FROM teachers
            ORDER BY id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["room"]."</td>
                        <td>".$row["mobile"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["department"]."</td>
                        <td> <a href='teacher_details.php?id=".$row["id"]."'>Details</a> </td>
                    </tr>";
                }
            }
            ?>
        </table>

        </div>
</div>
</body>
</html>
