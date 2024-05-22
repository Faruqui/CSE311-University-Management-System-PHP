<?php
include "connect.php";

function printTable($sql, $con){
    if($sql){
        $result = mysqli_query($con, $sql);
    
        if (mysqli_num_rows($result) > 0) { 

        //For table header/column names
        echo "<table class = 'center'><tr>";
        if ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach($row as $col => $val)
            {
                echo "<th> $col </th>";
                //echo "Column name: $col, Column Value: $val<br>";
            }
            echo "</tr>";
        }

        //for table data/row data
        echo "</tr>";
        $result = mysqli_query($con, $sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach($row as $col => $val)
            {
                echo "<td> $val </td>";
                // echo "<td> $<a href=\"#\">$val</a> </td>";
                //echo "Column name: $col, Column Value: $val<br>";
            }
            echo "</tr>";
        }
        echo "</table>";
        } else echo "Nothing Found";
    }
}
?>