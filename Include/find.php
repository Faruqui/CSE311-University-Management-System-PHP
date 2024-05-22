
<?php
$dbhost = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "university";

$conn = mysqli_connect($dbhost, $dbusername, $dbpass, $dbname) or die ("could not connect to mysql");

if(mysqli_connect_error())
{
	echo "Failed to connect MYSQL" . mysqli_connect_error();
}

$term = strip_tags(substr($_POST['search_term'],0, 100));

//$term = $_POST['search_term'];

$sql = $sql = "SELECT students.name AS Name,students.id AS ID, courseid AS CourseID, course.title AS Title, course.credit AS Credit
FROM students, takes, course
WHERE course.id = takes.courseid AND students.id = sid AND 
        (students.name like '%$term%'
        OR students.id like '%$term%')
ORDER BY course.id ASC;";
 
$result = mysqli_query($conn, $sql);

$string = '';

if ($term != ''){
    include "tableprint.php";        
    printTable($sql, $conn);
} else {
    echo "Type something before pressing search -__-";
}

 
echo $string;
?>