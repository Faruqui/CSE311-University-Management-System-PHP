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
        </div>
    </div>

    <div class="column middle">
        <h2>Grade History</h2>
        <table class="center">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Course Title</th>
                <th>Semester</th>
                <th>Year</th>
                <th>Grade</th>
            </tr>

            <?php
            include "connect.php";
            $sql = "SELECT students.id, students.name, course.title, semester, year, grade
            FROM students, takes, course
            WHERE course.id = takes.courseid AND students.id = sid
            ORDER BY students.id, courseid";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["title"]."</td>
                        <td>".$row["semester"]."</td>
                        <td>".$row["year"]."</td>
                        <td>".$row["grade"]."</td>
                    </tr>";
                }
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>
