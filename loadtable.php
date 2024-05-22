<?php
            include "connect.php";

            $sql = $_POST['query'];
            //$sql = "select * from students";

            //printTable($sql);
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($result) > 0){
                echo "<table class='center'><tr>";
            while ($fieldinfo=mysqli_fetch_field($result))
                {
                    echo "<th>".$fieldinfo->name."</th>";
                }
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach($row as $col => $val)
                {
                    echo "<td> $val </td>";
                    //echo "Column name: $col, Column Value: $val<br>";
                }
                echo "</tr>";
                }
            }else
                echo "Nothing to show";
?>