<?php
$stu_id = $_GET['id'];
include 'config.php';
$sql = "DELETE FROM student WHERE sid={$stu_id}";   
$result = mysqli_query($conn, $sql) or die("query unsuccessful");
// header("Location: http://localhost/crud/index.php");
header("Location: http://localhost/project/crud_html/index.php");
mysqli_close($conn);
?>