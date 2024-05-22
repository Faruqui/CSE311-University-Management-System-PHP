<?php
    include "Include/header.php";
   
?>

<title>Departments</title>

<body>
    <div class="row">
        <div class="column side">
            <div class="sidenav">
                <a href="department.php">Departments</a>
                <a href="department1.php">Courses</a>
                <a href="department2.php">Teachers</a>
                <a href="department3.php">Students</a>
            </div>
        </div>

        <div class="column middle">

            <h2>Department List</h2>
            <table class="center">
            <tr>
                <th>Department ID</th>
                <th>Department Name</th>
                <th>Location</th>
                <th>Budget</th>

            </tr>

            <?php
             include "connect.php";
            
            $sql = "SELECT *
                    FROM departments
                    ORDER BY id;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["location"]."</td>
                        <td>".$row["budget"]."</td>
                    </tr>";
                }
            }
            ?>
        </table>

        </div>
</div>
</body>
</html>
