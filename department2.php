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

            <h2>Department Wise Teachers' List</h2>
            <table class="center">
            <tr>
                <th>Department ID</th>
                <th>Department Name</th>
                <th>Teacher ID</th>
                <th>Teacher Name</th>
                <th>Email</th>
                
            </tr>

            <?php
            include "connect.php";
            $sql = "SELECT departments.id AS did, departments.name AS dname, teachers.id, teachers.name, teachers.email
            FROM departments, teachers
            WHERE departments.id = teachers.department
            ORDER BY departments.id, teachers.id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>
                        <td>".$row["did"]."</td>
                        <td>".$row["dname"]."</td>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["email"]."</td>
                    </tr>";
                }
            }
            ?>
        </table>

        </div>
</div>
</body>
</html>
