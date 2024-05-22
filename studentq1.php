<?php
    include "Include/header.php";
?>

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#t1").toggle();
    });
});
</script>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $("#test1").text($("#1").val());
            });
        });

        $(document).ready(function () {
            $("#search_results").slideUp();
            $("#search_button").click(function (e) {
                e.preventDefault();
                ajax_search();
                $("#t1").hide();
            });


        });

        function ajax_search() {
            $("#search_results").show();
            var search_val = $("#search_term").val();

            $.post("Include/searchstd1.php", { search_term: search_val }, function (data) {
                if (data.length > 0) {
                    $("#search_results").html(data);
                }
            })
        } 
    </script>
</head>

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



        <h2>Students' Course History</h2>
        <table class="center" id="t1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Course Title</th>
                <th>Credit Hour</th>
            </tr>

            <?php
            include "connect.php";
            $sql = "SELECT students.id, students.name, course.title, course.credit
            FROM students, takes, course
            WHERE course.id = takes.courseid AND students.id = sid
            ORDER BY students.id ASC;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["title"]."</td>
                        <td>".$row["credit"]."</td>
                    </tr>";
                }
            }
            ?>
        </table>

        <div id="search_results"></div>
        
    </div>

    <div class="column side">            
        <form id="searchform" method="post">
            <div><input type="text" name="search_term" id="search_term" placeholder="Student ID/Name"></div>
            <input type="submit" value="SEARCH" id="search_button" />
        </form>
    </div>  
</div>
</body>




</html>
