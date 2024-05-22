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

            <h2>Teacher's Job Experience</h2>
            <table class="center">
            <tr>
                <th>Name</th>
                <th>Organiztion</th>
                <th>Position</th>
                <th>Time From</th>
                <th>Time To</th>
            </tr>

            <?php
            include "connect.php";
            $sql = "SELECT teachers.name, experience.organization, experience.position, experience.tfrom, experience.tto
            FROM teachers, experience
            WHERE teachers.id = experience.id
            ORDER BY teachers.id;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>
                        <td>".$row["name"]."</td>
                        <td>".$row["organization"]."</td>
                        <td>".$row["position"]."</td>
                        <td>".$row["tfrom"]."</td>
                        <td>".$row["tto"]."</td>
                    </tr>";
                }
            }
            ?>
        </table>

        </div>
</div>
</body>
</html>
