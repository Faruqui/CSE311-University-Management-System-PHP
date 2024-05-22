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

            <h2>Teacher's Course History</h2>
            <table class="center">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Course Title</th>
                <th>Semester</th>
                <th>Year</th>
            </tr>

            <?php
             include "connect.php";
            $sql = "SELECT teachers.id, teachers.name, course.title, semester, year
            FROM teachers, teach, course
            WHERE course.id = teach.courseid AND teachers.id = tid
            ORDER BY teachers.id;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["title"]."</td>
                        <td>".$row["semester"]."</td>
                        <td>".$row["year"]."</td>
                    </tr>";
                }
            }
            ?>
        </table>

        </div>
</div>
</body>
</html>
