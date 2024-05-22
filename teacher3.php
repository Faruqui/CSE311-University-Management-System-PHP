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

            <h2>Teacher's Publications List</h2>
            <table class="center">
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Volume</th>
                <th>Number</th>
                <th>Year</th>
                
            </tr>

            <?php
            include "connect.php";
            $sql = "SELECT teachers.name, publications.title, publications.volume, publications.number, publications.year
            FROM teachers, publications
            WHERE teachers.id = publications.tid";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>
                        <td>".$row["name"]."</td>
                        <td>".$row["title"]."</td>
                        <td>".$row["volume"]."</td>
                        <td>".$row["number"]."</td>
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
