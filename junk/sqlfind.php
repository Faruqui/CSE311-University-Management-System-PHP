
<?php
$term = strip_tags(substr($_POST['search_term'],0, 100));

//$term = $_POST['search_term'];

$sql = $_POST['query'];
 

 include "tableprint.php"; 
$result = mysqli_query($conn, $sql);

$string = '';

if ($term != ''){       
    printTable($sql, $conn);
} else {
    echo "Type something before pressing search -__-";
}

 
echo $string;
?>